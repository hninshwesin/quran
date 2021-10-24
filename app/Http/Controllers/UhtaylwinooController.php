<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUhtaylwinooRequest;
use App\Http\Requests\UpdateUhtaylwinooRequest;
use App\Repositories\UhtaylwinooRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class UhtaylwinooController extends AppBaseController
{
    /** @var  UhtaylwinooRepository */
    private $uhtaylwinooRepository;

    public function __construct(UhtaylwinooRepository $uhtaylwinooRepo)
    {
        $this->uhtaylwinooRepository = $uhtaylwinooRepo;
    }

    /**
     * Display a listing of the Uhtaylwinoo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $uhtaylwinoos = $this->uhtaylwinooRepository->paginate(10);

        return view('uhtaylwinoos.index')
            ->with('uhtaylwinoos', $uhtaylwinoos);
    }

    /**
     * Show the form for creating a new Uhtaylwinoo.
     *
     * @return Response
     */
    public function create()
    {
        return view('uhtaylwinoos.create');
    }

    /**
     * Store a newly created Uhtaylwinoo in storage.
     *
     * @param CreateUhtaylwinooRequest $request
     *
     * @return Response
     */
    public function store(CreateUhtaylwinooRequest $request)
    {
        $input = $request->all();

        $uhtaylwinoo = $this->uhtaylwinooRepository->create($input);

        Flash::success('Uhtaylwinoo saved successfully.');

        return redirect(route('uhtaylwinoos.index'));
    }

    /**
     * Display the specified Uhtaylwinoo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $uhtaylwinoo = $this->uhtaylwinooRepository->find($id);

        if (empty($uhtaylwinoo)) {
            Flash::error('Uhtaylwinoo not found');

            return redirect(route('uhtaylwinoos.index'));
        }

        return view('uhtaylwinoos.show')->with('uhtaylwinoo', $uhtaylwinoo);
    }

    /**
     * Show the form for editing the specified Uhtaylwinoo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $uhtaylwinoo = $this->uhtaylwinooRepository->find($id);

        if (empty($uhtaylwinoo)) {
            Flash::error('Uhtaylwinoo not found');

            return redirect(route('uhtaylwinoos.index'));
        }

        return view('uhtaylwinoos.edit')->with('uhtaylwinoo', $uhtaylwinoo);
    }

    /**
     * Update the specified Uhtaylwinoo in storage.
     *
     * @param int $id
     * @param UpdateUhtaylwinooRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUhtaylwinooRequest $request)
    {
        $uhtaylwinoo = $this->uhtaylwinooRepository->find($id);

        if (empty($uhtaylwinoo)) {
            Flash::error('Uhtaylwinoo not found');

            return redirect(route('uhtaylwinoos.index'));
        }

        $uhtaylwinoo = $this->uhtaylwinooRepository->update($request->all(), $id);

        Flash::success('Uhtaylwinoo updated successfully.');

        return redirect(route('uhtaylwinoos.index'));
    }

    /**
     * Remove the specified Uhtaylwinoo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $uhtaylwinoo = $this->uhtaylwinooRepository->find($id);

        if (empty($uhtaylwinoo)) {
            Flash::error('Uhtaylwinoo not found');

            return redirect(route('uhtaylwinoos.index'));
        }

        $this->uhtaylwinooRepository->delete($id);

        Flash::success('Uhtaylwinoo deleted successfully.');

        return redirect(route('uhtaylwinoos.index'));
    }
}
