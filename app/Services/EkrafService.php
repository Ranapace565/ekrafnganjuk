<?php

namespace App\Services;

use App\Events\Ekraf\EkrafUpdate;
use App\Models\Ekraf; // ✅ penting!
use Illuminate\Support\Facades\Storage;
use App\Repositories\Interfaces\EkrafRepositoryInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;

class EkrafService
{
    protected $ekrafRepository;

    protected $userRepository;

    public function __construct(EkrafRepositoryInterface $ekrafRepository, UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
        $this->ekrafRepository = $ekrafRepository;
    }

    public function index(?string $search = null, ?int $sector = null, ?int $district = null, ?int $status = null)
    {
        return $this->ekrafRepository->searchAndPaginate($search, $sector, $district, $status);
    }

    public function getByUser($userId)
    {
        return $this->ekrafRepository->findByUserId($userId);
    }

    public function getBySlug($slug)
    {
        return $this->ekrafRepository->findBySlug($slug);
    }

    public function store(array $validated)
    {
        $email = config('app.main_email');
        $user = $this->userRepository->findByEmail($email);
        $validated['user_id'] = $user->id;
        // dd($user);

        $ekraf = $this->ekrafRepository->store($validated);

        return $ekraf;
    }

    public function update(Ekraf $ekraf, array $data): Ekraf
    {
        $wasRejected = $ekraf->status === 0;

        if (isset($data['remove_logo']) && $data['remove_logo'] == '1') {
            if ($ekraf->logo && Storage::disk('public')->exists($ekraf->logo)) {
                Storage::disk('public')->delete($ekraf->logo);
            }
            $data['logo'] = null;
        }

        if (isset($data['remove_cover']) && $data['remove_cover'] == '1') {
            if ($ekraf->cover && Storage::disk('public')->exists($ekraf->cover)) {
                Storage::disk('public')->delete($ekraf->cover);
            }
            $data['cover'] = null;
        }

        if ($wasRejected) {
            $data['status'] = 1;
            event(new EkrafUpdate($ekraf));
        }

        return $this->ekrafRepository->update($ekraf, $data);
    }
}
