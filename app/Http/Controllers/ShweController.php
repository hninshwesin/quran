<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateShweRequest;
use App\Http\Requests\UpdateShweRequest;
use App\Repositories\ShweRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ShweController extends AppBaseController
{
    /** @var  ShweRepository */
    private $shweRepository;

    public function __construct(ShweRepository $shweRepo)
    {
        $this->shweRepository = $shweRepo;
    }

    /**
     * Display a listing of the Shwe.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $shwes = $this->shweRepository->paginate(10);

        return view('shwes.index')
            ->with('shwes', $shwes);
    }

    /**
     * Show the form for creating a new Shwe.
     *
     * @return Response
     */
    public function create()
    {
        return view('shwes.create');
    }

    /**
     * Store a newly created Shwe in storage.
     *
     * @param CreateShweRequest $request
     *
     * @return Response
     */
    public function store(CreateShweRequest $request)
    {
        $input = $request->all();

        $shwe = $this->shweRepository->create($input);

        Flash::success('Shwe saved successfully.');

        return redirect(route('shwes.index'));
    }

    /**
     * Display the specified Shwe.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $shwe = $this->shweRepository->find($id);

        if (empty($shwe)) {
            Flash::error('Shwe not found');

            return redirect(route('shwes.index'));
        }

        return view('shwes.show')->with('shwe', $shwe);
    }

    /**
     * Show the form for editing the specified Shwe.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $shwe = $this->shweRepository->find($id);

        if (empty($shwe)) {
            Flash::error('Shwe not found');

            return redirect(route('shwes.index'));
        }

        return view('shwes.edit')->with('shwe', $shwe);
    }

    /**
     * Update the specified Shwe in storage.
     *
     * @param int $id
     * @param UpdateShweRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateShweRequest $request)
    {
        $shwe = $this->shweRepository->find($id);

        if (empty($shwe)) {
            Flash::error('Shwe not found');

            return redirect(route('shwes.index'));
        }

        $shwe = $this->shweRepository->update($request->all(), $id);

        Flash::success('Shwe updated successfully.');

        return redirect(route('shwes.index'));
    }

    /**
     * Remove the specified Shwe from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $shwe = $this->shweRepository->find($id);

        if (empty($shwe)) {
            Flash::error('Shwe not found');

            return redirect(route('shwes.index'));
        }

        $this->shweRepository->delete($id);

        Flash::success('Shwe deleted successfully.');

        return redirect(route('shwes.index'));
    }
}
