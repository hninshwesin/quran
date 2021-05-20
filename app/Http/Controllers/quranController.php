<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatequranRequest;
use App\Http\Requests\UpdatequranRequest;
use App\Repositories\quranRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class quranController extends AppBaseController
{
    /** @var  quranRepository */
    private $quranRepository;

    public function __construct(quranRepository $quranRepo)
    {
        $this->quranRepository = $quranRepo;
    }

    /**
     * Display a listing of the quran.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $qurans = $this->quranRepository->paginate(10);

        return view('qurans.index')
            ->with('qurans', $qurans);
    }

    /**
     * Show the form for creating a new quran.
     *
     * @return Response
     */
    public function create()
    {
        return view('qurans.create');
    }

    /**
     * Store a newly created quran in storage.
     *
     * @param CreatequranRequest $request
     *
     * @return Response
     */
    public function store(CreatequranRequest $request)
    {
        $input = $request->all();

        $quran = $this->quranRepository->create($input);

        Flash::success('Quran saved successfully.');

        return redirect(route('qurans.index'));
    }

    /**
     * Display the specified quran.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $quran = $this->quranRepository->find($id);

        if (empty($quran)) {
            Flash::error('Quran not found');

            return redirect(route('qurans.index'));
        }

        return view('qurans.show')->with('quran', $quran);
    }

    /**
     * Show the form for editing the specified quran.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $quran = $this->quranRepository->find($id);

        if (empty($quran)) {
            Flash::error('Quran not found');

            return redirect(route('qurans.index'));
        }

        return view('qurans.edit')->with('quran', $quran);
    }

    /**
     * Update the specified quran in storage.
     *
     * @param int $id
     * @param UpdatequranRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatequranRequest $request)
    {
        $quran = $this->quranRepository->find($id);

        if (empty($quran)) {
            Flash::error('Quran not found');

            return redirect(route('qurans.index'));
        }

        $quran = $this->quranRepository->update($request->all(), $id);

        Flash::success('Quran updated successfully.');

        return redirect(route('qurans.index'));
    }

    /**
     * Remove the specified quran from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $quran = $this->quranRepository->find($id);

        if (empty($quran)) {
            Flash::error('Quran not found');

            return redirect(route('qurans.index'));
        }

        $this->quranRepository->delete($id);

        Flash::success('Quran deleted successfully.');

        return redirect(route('qurans.index'));
    }
}
