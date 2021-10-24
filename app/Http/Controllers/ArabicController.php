<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArabicRequest;
use App\Http\Requests\UpdateArabicRequest;
use App\Repositories\ArabicRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ArabicController extends AppBaseController
{
    /** @var  ArabicRepository */
    private $arabicRepository;

    public function __construct(ArabicRepository $arabicRepo)
    {
        $this->arabicRepository = $arabicRepo;
    }

    /**
     * Display a listing of the Arabic.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $arabics = $this->arabicRepository->paginate(10);

        return view('arabics.index')
            ->with('arabics', $arabics);
    }

    /**
     * Show the form for creating a new Arabic.
     *
     * @return Response
     */
    public function create()
    {
        return view('arabics.create');
    }

    /**
     * Store a newly created Arabic in storage.
     *
     * @param CreateArabicRequest $request
     *
     * @return Response
     */
    public function store(CreateArabicRequest $request)
    {
        $input = $request->all();

        $arabic = $this->arabicRepository->create($input);

        Flash::success('Arabic saved successfully.');

        return redirect(route('arabics.index'));
    }

    /**
     * Display the specified Arabic.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $arabic = $this->arabicRepository->find($id);

        if (empty($arabic)) {
            Flash::error('Arabic not found');

            return redirect(route('arabics.index'));
        }

        return view('arabics.show')->with('arabic', $arabic);
    }

    /**
     * Show the form for editing the specified Arabic.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $arabic = $this->arabicRepository->find($id);

        if (empty($arabic)) {
            Flash::error('Arabic not found');

            return redirect(route('arabics.index'));
        }

        return view('arabics.edit')->with('arabic', $arabic);
    }

    /**
     * Update the specified Arabic in storage.
     *
     * @param int $id
     * @param UpdateArabicRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateArabicRequest $request)
    {
        $arabic = $this->arabicRepository->find($id);

        if (empty($arabic)) {
            Flash::error('Arabic not found');

            return redirect(route('arabics.index'));
        }

        $arabic = $this->arabicRepository->update($request->all(), $id);

        Flash::success('Arabic updated successfully.');

        return redirect(route('arabics.index'));
    }

    /**
     * Remove the specified Arabic from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $arabic = $this->arabicRepository->find($id);

        if (empty($arabic)) {
            Flash::error('Arabic not found');

            return redirect(route('arabics.index'));
        }

        $this->arabicRepository->delete($id);

        Flash::success('Arabic deleted successfully.');

        return redirect(route('arabics.index'));
    }
}
