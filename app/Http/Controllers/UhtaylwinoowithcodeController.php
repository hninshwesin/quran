<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUhtaylwinoowithcodeRequest;
use App\Http\Requests\UpdateUhtaylwinoowithcodeRequest;
use App\Repositories\UhtaylwinoowithcodeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class UhtaylwinoowithcodeController extends AppBaseController
{
    /** @var  UhtaylwinoowithcodeRepository */
    private $uhtaylwinoowithcodeRepository;

    public function __construct(UhtaylwinoowithcodeRepository $uhtaylwinoowithcodeRepo)
    {
        $this->uhtaylwinoowithcodeRepository = $uhtaylwinoowithcodeRepo;
    }

    /**
     * Display a listing of the Uhtaylwinoowithcode.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $uhtaylwinoowithcodes = $this->uhtaylwinoowithcodeRepository->paginate(10);

        return view('uhtaylwinoowithcodes.index')
            ->with('uhtaylwinoowithcodes', $uhtaylwinoowithcodes);
    }

    /**
     * Show the form for creating a new Uhtaylwinoowithcode.
     *
     * @return Response
     */
    public function create()
    {
        return view('uhtaylwinoowithcodes.create');
    }

    /**
     * Store a newly created Uhtaylwinoowithcode in storage.
     *
     * @param CreateUhtaylwinoowithcodeRequest $request
     *
     * @return Response
     */
    public function store(CreateUhtaylwinoowithcodeRequest $request)
    {
        $input = $request->all();

        $uhtaylwinoowithcode = $this->uhtaylwinoowithcodeRepository->create($input);

        Flash::success('Uhtaylwinoowithcode saved successfully.');

        return redirect(route('uhtaylwinoowithcodes.index'));
    }

    /**
     * Display the specified Uhtaylwinoowithcode.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $uhtaylwinoowithcode = $this->uhtaylwinoowithcodeRepository->find($id);

        if (empty($uhtaylwinoowithcode)) {
            Flash::error('Uhtaylwinoowithcode not found');

            return redirect(route('uhtaylwinoowithcodes.index'));
        }

        return view('uhtaylwinoowithcodes.show')->with('uhtaylwinoowithcode', $uhtaylwinoowithcode);
    }

    /**
     * Show the form for editing the specified Uhtaylwinoowithcode.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $uhtaylwinoowithcode = $this->uhtaylwinoowithcodeRepository->find($id);

        if (empty($uhtaylwinoowithcode)) {
            Flash::error('Uhtaylwinoowithcode not found');

            return redirect(route('uhtaylwinoowithcodes.index'));
        }

        return view('uhtaylwinoowithcodes.edit')->with('uhtaylwinoowithcode', $uhtaylwinoowithcode);
    }

    /**
     * Update the specified Uhtaylwinoowithcode in storage.
     *
     * @param int $id
     * @param UpdateUhtaylwinoowithcodeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUhtaylwinoowithcodeRequest $request)
    {
        $uhtaylwinoowithcode = $this->uhtaylwinoowithcodeRepository->find($id);

        if (empty($uhtaylwinoowithcode)) {
            Flash::error('Uhtaylwinoowithcode not found');

            return redirect(route('uhtaylwinoowithcodes.index'));
        }

        $uhtaylwinoowithcode = $this->uhtaylwinoowithcodeRepository->update($request->all(), $id);

        Flash::success('Uhtaylwinoowithcode updated successfully.');

        return redirect(route('uhtaylwinoowithcodes.index'));
    }

    /**
     * Remove the specified Uhtaylwinoowithcode from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $uhtaylwinoowithcode = $this->uhtaylwinoowithcodeRepository->find($id);

        if (empty($uhtaylwinoowithcode)) {
            Flash::error('Uhtaylwinoowithcode not found');

            return redirect(route('uhtaylwinoowithcodes.index'));
        }

        $this->uhtaylwinoowithcodeRepository->delete($id);

        Flash::success('Uhtaylwinoowithcode deleted successfully.');

        return redirect(route('uhtaylwinoowithcodes.index'));
    }
}
