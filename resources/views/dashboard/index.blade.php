@extends('layouts.app')

@section('title', $title)

@section('content')
    <h1 class="text-2xl font-bold mb-6">{{ $title }}</h1>

    @if($alerts->count() > 0)
        <div class="bg-red-100 text-red-700 p-4 rounded mb-6">
            You have {{ $alerts->count() }} overdue alert(s).
        </div>
    @elseif($stats[0]['value'] === 0)
        <div class="bg-yellow-100 text-yellow-700 p-4 rounded mb-6">
            No data yet.
        </div>
    @else
        <div class="bg-green-100 text-green-700 p-4 rounded mb-6">
            All clear.
        </div>
    @endif

    <!-- Stats Grid -->
    <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-4">
        @foreach($stats as $stat)
            <x-stat-card :title="$stat['label']" :value="$stat['value']" />
        @endforeach
    </div>

    <div class="mt-6">
        <x-panel title="Quick Links">
            <a href="/schedule" class="text-blue-600 hover:underline">View vaccination schedule</a>
        </x-panel>
    </div>
@endsection
