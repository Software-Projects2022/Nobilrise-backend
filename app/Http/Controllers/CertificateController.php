<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Setting;
use Illuminate\Http\Response;
use Illuminate\View\View;

class CertificateController extends Controller
{
    public function show(int $enrollmentId): View|Response
    {
        $client = auth('client')->user();

        $enrollment = Enrollment::where('id', $enrollmentId)
            ->where('client_id', $client->id)
            ->where('status', 'completed')
            ->with('trainingCourse')
            ->firstOrFail();

        return view('pages.certificate.certificate', [
            'studentName' => $client->name,
            'courseName' => $enrollment->trainingCourse->name,
            'issueDate' => $enrollment->updated_at->format('d / m / Y'),
            'certificateNumber' => 'CERT-'.str_pad($enrollment->id, 6, '0', STR_PAD_LEFT),
            'settings' => Setting::first(),
        ]);
    }
}
