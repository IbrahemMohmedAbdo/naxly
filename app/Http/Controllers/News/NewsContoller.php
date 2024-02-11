<?php

namespace App\Http\Controllers\News;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\NewsRepository;

class NewsContoller extends Controller
{
    protected $newsRepository;

    public function __construct(NewsRepository $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    public function index()
    {
        $news = $this->newsRepository->all();
             return view('dashboard.app.news.index', compact('news'));
    }

    public function show($id)
    {
        $newsItem = $this->newsRepository->find($id);
        return view('dashborad.app.news.show', compact('newsItem'));
    }

    public function create()
    {
        return view('dashboard.app.news.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            // Add any other validation rules for your model fields
        ]);

        $this->newsRepository->create($data);

        return redirect()->route('news.index')->with('success', 'News created successfully');
    }

    public function edit($id)
    {
        $newsItem = $this->newsRepository->find($id);
        return view('dashborad.app.news.edit', compact('newsItem'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            // Add any other validation rules for your model fields
        ]);

        $this->newsRepository->update($id, $data);

        return redirect()->route('news.index')->with('success', 'News updated successfully');
    }

    public function destroy($id)
    {
        $this->newsRepository->delete($id);

        return redirect()->route('news.index')->with('success', 'News deleted successfully');
    }
}
