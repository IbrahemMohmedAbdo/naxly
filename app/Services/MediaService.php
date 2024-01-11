<?php

use App\Models\Media;
use Illuminate\Support\Facades\Storage;

class MediaService
{
    public function createOrUpdateMedia($model, $file)
    {
        $data = $this->getMediaData($file, $model);
        $this->saveMediaFile($file, $data);
    }

    public function deleteMedia($createById)
    {
        $existingMedia = Media::where('createby_id', $createById)->first();

        if ($existingMedia) {
            $this->deleteMediaFile($existingMedia->filename);
            $existingMedia->delete();
        }
    }

    protected function saveMediaFile($file, array $data)
    {
        $this->deleteExistingMedia($data['createby_id']);

        $filePath = $file->storeAs('media', $data['filename'], 'public');

        $data['filename'] = $filePath;

        $model = $this->getModel($data['createby_type'], $data['createby_id']);
        $model->media()->updateOrCreate(['createby_id' => $data['createby_id']], $data);
    }

    protected function deleteExistingMedia($createById)
    {
        $existingMedia = Media::where('createby_id', $createById)->first();

        if ($existingMedia) {
            Storage::disk('public')->delete($existingMedia->filename);
            $existingMedia->delete();
        }
    }

    protected function getMediaData($file, $model)
    {
        $timestamp = time();
        $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();

        return [
            'filename' => $timestamp . '_' . $originalName . '.' . $extension,
            'filetype' => $file->getClientMimeType(),
            'type' => 'media',  // Adjust based on your needs
            'createby_type' => get_class($model),
            'createby_id' => $model->id,
            'updateby_type' => null,
            'updateby_id' => null,
        ];
    }

    protected function deleteMediaFile($filename)
    {
        // Delete the old media file
        $filePath = public_path('media') . '/' . $filename;

        if (file_exists($filePath)) {
            unlink($filePath);
        }
    }

    protected function getModel($modelType, $modelId)
    {

        return $modelType::find($modelId);
    }
}
