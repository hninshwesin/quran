<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateShweFootnoteRequest;
use App\Http\Requests\UpdateShweFootnoteRequest;
use App\Repositories\ShweFootnoteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ShweFootnoteController extends AppBaseController
{
    /** @var  ShweFootnoteRepository */
    private $shweFootnoteRepository;

    public function __construct(ShweFootnoteRepository $shweFootnoteRepo)
    {
        $this->shweFootnoteRepository = $shweFootnoteRepo;
    }

    /**
     * Display a listing of the ShweFootnote.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $shweFootnotes = $this->shweFootnoteRepository->all();

        return view('shwe_footnotes.index')
            ->with('shweFootnotes', $shweFootnotes);
    }

    /**
     * Show the form for creating a new ShweFootnote.
     *
     * @return Response
     */
    public function create()
    {
        return view('shwe_footnotes.create');
    }

    /**
     * Store a newly created ShweFootnote in storage.
     *
     * @param CreateShweFootnoteRequest $request
     *
     * @return Response
     */
    public function store(CreateShweFootnoteRequest $request)
    {
        $input = $request->all();

        $shweFootnote = $this->shweFootnoteRepository->create($input);

        Flash::success('Shwe Footnote saved successfully.');

        return redirect(route('shweFootnotes.index'));
    }

    /**
     * Display the specified ShweFootnote.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $shweFootnote = $this->shweFootnoteRepository->find($id);

        if (empty($shweFootnote)) {
            Flash::error('Shwe Footnote not found');

            return redirect(route('shweFootnotes.index'));
        }

        return view('shwe_footnotes.show')->with('shweFootnote', $shweFootnote);
    }

    /**
     * Show the form for editing the specified ShweFootnote.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $shweFootnote = $this->shweFootnoteRepository->find($id);

        if (empty($shweFootnote)) {
            Flash::error('Shwe Footnote not found');

            return redirect(route('shweFootnotes.index'));
        }

        return view('shwe_footnotes.edit')->with('shweFootnote', $shweFootnote);
    }

    /**
     * Update the specified ShweFootnote in storage.
     *
     * @param int $id
     * @param UpdateShweFootnoteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateShweFootnoteRequest $request)
    {
        $shweFootnote = $this->shweFootnoteRepository->find($id);

        if (empty($shweFootnote)) {
            Flash::error('Shwe Footnote not found');

            return redirect(route('shweFootnotes.index'));
        }

        $shweFootnote = $this->shweFootnoteRepository->update($request->all(), $id);

        Flash::success('Shwe Footnote updated successfully.');

        return redirect(route('shweFootnotes.index'));
    }

    /**
     * Remove the specified ShweFootnote from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $shweFootnote = $this->shweFootnoteRepository->find($id);

        if (empty($shweFootnote)) {
            Flash::error('Shwe Footnote not found');

            return redirect(route('shweFootnotes.index'));
        }

        $this->shweFootnoteRepository->delete($id);

        Flash::success('Shwe Footnote deleted successfully.');

        return redirect(route('shweFootnotes.index'));
    }
}
