@extends('layouts.app')

@section('title', 'Vaccination Schedule')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Vaccination Schedule</h1>

    <x-panel title="Vaccination Schedule">
        <table class="w-full text-left border">
            <thead>
                <tr class="bg-gray-100 border-b">
                    <th class="p-2">Patient</th>
                    <th class="p-2">Purok</th>
                    <th class="p-2">Vaccine</th>
                    <th class="p-2">Dose</th>
                    <th class="p-2">Date</th>
                    <th class="p-2">Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse($schedules as $schedule)
                    <!-- Table Body -->
                    <tr class="{{ $loop->odd ? 'bg-gray-50' : 'bg-white' }} border-b">
                        <td class="p-2">{{ $schedule->patient_name }}</td>
                        <td class="p-2">{{ $schedule->purok }}</td>
                        <td class="p-2">{{ $schedule->vaccine }}</td>
                        <td class="p-2">{{ $schedule->dose }}</td>
                        <td class="p-2">{{ $schedule->scheduled_at->format('M d, Y') }}</td>
                        <td class="p-2">
                            {{ $schedule->status }}
                            @unless($schedule->status === 'Done')
                                <span class="text-xs text-red-600 bg-red-100 px-2 py-1 rounded">Action Needed</span>
                            @endunless
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="p-4 text-center text-gray-500">No schedules yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </x-panel>
@endsection
