<?php

namespace App\Services;

use App\Events\Ekraf\EkrafUpdate;
use App\Models\Ekraf; // ✅ penting!
use Illuminate\Support\Facades\Storage;
use App\Repositories\Interfaces\EkrafRepositoryInterface;

class EkrafService
{
    protected $ekrafRepository;

    public function __construct(EkrafRepositoryInterface $ekrafRepository)
    {
        $this->ekrafRepository = $ekrafRepository;
    }

    public function getByUser($userId)
    {
        return $this->ekrafRepository->findByUserId($userId);
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
