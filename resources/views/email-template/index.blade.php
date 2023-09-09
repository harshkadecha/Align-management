@extends('layout.mail-main')
@section('styles')
@endsection
@section('content')
    <h4 style="font-weight: 200; font-size: 18px; margin: 20px 0 30px 0; color: #333333;">Hello, We Have Recived Repair
        Request From our Site.</h4>

    <h2 style="font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;">
        @php
            $todayDate = Illuminate\Support\Carbon::now()->format('d F Y');

            $dateTime = date($data1['preffred_time']);
            $date = Illuminate\Support\Carbon::createFromFormat('Y-m-d H:i', $dateTime);
            $preferredTime = $date->format('d F Y g:i A');

        @endphp
        <b>Date</b> :
        {{ $todayDate }}
    </h2>
    <h2 style="font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;">
        <b>Requester Name</b> : @isset($data1['name'])
            {{ $data1['name'] }}
        @endisset
    </h2>
    {{-- <h2 style="font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;">
        <b>Contact Information </b> : @isset($role)
            {{ $role }}
        @endisset
    </h2> --}}
    <h2 style="font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;">
        <b>Email</b> : @isset($data1['email'])
            {{ $data1['email'] }}
        @endisset
    </h2>
    <h2 style="font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;">
        <b>Phone Number</b> : @isset($data1['contact_number'])
            {{ $data1['contact_number'] }}
        @endisset
    </h2>
    <h2 style="font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;">
        <b>Location/Address</b> : @isset($data1['address'])
            {{ $data1['address'] }}
        @endisset
    </h2>
    <h2 style="font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;">
        <b>Description of Issue</b> : @isset($data1['description'])
            {{ $data1['description'] }}
        @endisset
    </h2>
    <h2 style="font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;">
        <b>Urgency Level</b> : @isset($data1['urgency_level'])
            {{ $data1['urgency_level'] }}
        @endisset
    </h2>
    <h2 style="font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;">
        <b>Permission to Enter</b> : @isset($data1['permission'])
            @if ($data1['permission'] == 'yes')
                Yes, you have permission to enter the premises in our absence.
            @else
                No, please schedule a specific time with us.
            @endif
        @endisset
    </h2>
    <h2 style="font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;">
        <b>Preferred Date and Time for Maintenance</b> : @isset($preferredTime)
            {{ $preferredTime }}
        @endisset
    </h2>
    <h2 style="font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;">
        <b>Attachments</b> : @isset($data1['attachment'])
            @php
                $attachemnets = explode(',',$data1['attachment']);
            @endphp
            @foreach ($attachemnets as $attachemnet)
                <img src="{{ asset('storage/image/repair-requests/'.$attachemnet) }}" style="max-width: 100px;">
            @endforeach
            {{-- {{$data1['attachment']}} --}}
        @endisset
    </h2>
    <h2 style="font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;">
        <b>Maintenance Type</b> : @isset($data1['maintenance'])
            {{ $data1['maintenance'] }}
        @endisset
    </h2>
    <h2 style="font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;">
        <b>Additional Notes:</b> : @isset($data1['additonal_note'])
            {{ $data1['additonal_note'] }}
        @endisset
    </h2>
@endsection
