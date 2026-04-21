<?php

namespace App\Http\Controllers;

use App\Models\TrainingCourse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function store(Request $request, TrainingCourse $course): JsonResponse
    {
        $client = auth('client')->user();

        if ($client->isEnrolledIn($course->id)) {
            return response()->json(['message' => 'أنت مسجل بالفعل في هذه الدورة.'], 422);
        }

        $amountPaid = $course->discount_price ?? $course->price ?? 0;

        $client->trainingCourses()->attach($course->id, ['amount_paid' => $amountPaid]);

        return response()->json([
            'message' => 'تم التسجيل في الدورة بنجاح!',
            'redirect_url' => route('profile'),
        ]);
    }
}
