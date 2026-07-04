<?php

namespace App\Http\Controllers\Admin;

use App\Models\Platform;
use App\Services\PlatformService;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePlatformRequest;
use App\Repositories\Contracts\PlatformRepositoryInterface;

class PlatformController extends Controller
{
    public function __construct(
        protected PlatformRepositoryInterface $repository,
        protected PlatformService $service,
    ) {}

    public function index()
    {
        $platforms = $this->repository->paginate();

        return view(
            'admin.platforms.index',
            compact('platforms')
        );
    }

    public function create()
    {
        return view('admin.platforms.create');
    }

    public function store(
        StorePlatformRequest $request
    ): RedirectResponse
    {
        $this->service->create(
            $request->validated()
        );

        return redirect()
            ->route('admin.platforms.index')
            ->with(
                'success',
                'Platform created successfully.'
            );
    }

    public function edit(
        Platform $platform
    )
    {
        return view(
            'admin.platforms.edit',
            compact('platform')
        );
    }

    public function update(StorePlatformRequest $request,Platform $platform): RedirectResponse
    {
        $this->service->update(
            $platform,
            $request->validated()
        );

        return redirect()
            ->route('admin.platforms.index')
            ->with(
                'success',
                'Platform updated successfully.'
            );
    }

    public function destroy(Platform $platform): RedirectResponse
    {
        $this->repository->delete($platform);

        return back()
            ->with(
                'success',
                'Platform deleted successfully.'
            );
    }
}