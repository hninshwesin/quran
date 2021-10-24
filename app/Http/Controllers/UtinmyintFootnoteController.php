<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUtinmyintFootnoteRequest;
use App\Http\Requests\UpdateUtinmyintFootnoteRequest;
use App\Repositories\UtinmyintFootnoteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class UtinmyintFootnoteController extends AppBaseController
{
    /** @var  UtinmyintFootnoteRepository */
    private $utinmyintFootnoteRepository;

    public function __construct(UtinmyintFootnoteRepository $utinmyintFootnoteRepo)
    {
        $this->utinmyintFootnoteRepository = $utinmyintFootnoteRepo;
    }

    /**
     * Display a listing of the UtinmyintFootnote.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $utinmyintFootnotes = $this->utinmyintFootnoteRepository->all();

        return view('utinmyint_footnotes.index')
            ->with('utinmyintFootnotes', $utinmyintFootnotes);
    }

    /**
     * Show the form for creating a new UtinmyintFootnote.
     *
     * @return Response
     */
    public function create()
    {
        return view('utinmyint_footnotes.create');
    }

    /**
     * Store a newly created UtinmyintFootnote in storage.
     *
     * @param CreateUtinmyintFootnoteRequest $request
     *
     * @return Response
     */
    public function store(CreateUtinmyintFootnoteRequest $request)
    {
        $input = $request->all();

        $utinmyintFootnote = $this->utinmyintFootnoteRepository->create($input);

        Flash::success('Utinmyint Footnote saved successfully.');

        return redirect(route('utinmyintFootnotes.index'));
    }

    /**
     * Display the specified UtinmyintFootnote.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $utinmyintFootnote = $this->utinmyintFootnoteRepository->find($id);

        if (empty($utinmyintFootnote)) {
            Flash::error('Utinmyint Footnote not found');

            return redirect(route('utinmyintFootnotes.index'));
        }

        return view('utinmyint_footnotes.show')->with('utinmyintFootnote', $utinmyintFootnote);
    }

    /**
     * Show the form for editing the specified UtinmyintFootnote.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $utinmyintFootnote = $this->utinmyintFootnoteRepository->find($id);

        if (empty($utinmyintFootnote)) {
            Flash::error('Utinmyint Footnote not found');

            return redirect(route('utinmyintFootnotes.index'));
        }

        return view('utinmyint_footnotes.edit')->with('utinmyintFootnote', $utinmyintFootnote);
    }

    /**
     * Update the specified UtinmyintFootnote in storage.
     *
     * @param int $id
     * @param UpdateUtinmyintFootnoteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUtinmyintFootnoteRequest $request)
    {
        $utinmyintFootnote = $this->utinmyintFootnoteRepository->find($id);

        if (empty($utinmyintFootnote)) {
            Flash::error('Utinmyint Footnote not found');

            return redirect(route('utinmyintFootnotes.index'));
        }

        $utinmyintFootnote = $this->utinmyintFootnoteRepository->update($request->all(), $id);

        Flash::success('Utinmyint Footnote updated successfully.');

        return redirect(route('utinmyintFootnotes.index'));
    }

    /**
     * Remove the specified UtinmyintFootnote from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $utinmyintFootnote = $this->utinmyintFootnoteRepository->find($id);

        if (empty($utinmyintFootnote)) {
            Flash::error('Utinmyint Footnote not found');

            return redirect(route('utinmyintFootnotes.index'));
        }

        $this->utinmyintFootnoteRepository->delete($id);

        Flash::success('Utinmyint Footnote deleted successfully.');

        return redirect(route('utinmyintFootnotes.index'));
    }
}
