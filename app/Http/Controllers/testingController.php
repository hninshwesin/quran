<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetestingRequest;
use App\Http\Requests\UpdatetestingRequest;
use App\Repositories\testingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class testingController extends AppBaseController
{
    /** @var  testingRepository */
    private $testingRepository;

    public function __construct(testingRepository $testingRepo)
    {
        $this->testingRepository = $testingRepo;
    }

    /**
     * Display a listing of the testing.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $testings = $this->testingRepository->paginate(10);

        return view('testings.index')
            ->with('testings', $testings);
    }

    /**
     * Show the form for creating a new testing.
     *
     * @return Response
     */
    public function create()
    {
        return view('testings.create');
    }

    /**
     * Store a newly created testing in storage.
     *
     * @param CreatetestingRequest $request
     *
     * @return Response
     */
    public function store(CreatetestingRequest $request)
    {
        $input = $request->all();

        $testing = $this->testingRepository->create($input);

        Flash::success('Testing saved successfully.');

        return redirect(route('testings.index'));
    }

    /**
     * Display the specified testing.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $testing = $this->testingRepository->find($id);

        if (empty($testing)) {
            Flash::error('Testing not found');

            return redirect(route('testings.index'));
        }

        return view('testings.show')->with('testing', $testing);
    }

    /**
     * Show the form for editing the specified testing.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $testing = $this->testingRepository->find($id);

        if (empty($testing)) {
            Flash::error('Testing not found');

            return redirect(route('testings.index'));
        }

        return view('testings.edit')->with('testing', $testing);
    }

    /**
     * Update the specified testing in storage.
     *
     * @param int $id
     * @param UpdatetestingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetestingRequest $request)
    {
        $testing = $this->testingRepository->find($id);

        if (empty($testing)) {
            Flash::error('Testing not found');

            return redirect(route('testings.index'));
        }

        $testing = $this->testingRepository->update($request->all(), $id);

        Flash::success('Testing updated successfully.');

        return redirect(route('testings.index'));
    }

    /**
     * Remove the specified testing from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $testing = $this->testingRepository->find($id);

        if (empty($testing)) {
            Flash::error('Testing not found');

            return redirect(route('testings.index'));
        }

        $this->testingRepository->delete($id);

        Flash::success('Testing deleted successfully.');

        return redirect(route('testings.index'));
    }
}
