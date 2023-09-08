@extends('layout.mail-main')
@section('styles')
@endsection
@section('content')
    <h4 style="font-weight: 200; font-size: 18px; margin: 20px 0 30px 0; color: #333333;">Hello, We Have Recived Repair Request From our Site.</h4>

    <h2 style="font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;">
        <b>Date</b> : @isset($staffmail)
            {{ $staffmail }}
        @endisset
    </h2>
    <h2 style="font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;">
        <b>Requester Name</b> : @isset($staffpass)
            {{ $staffpass }}
        @endisset
    </h2>
    {{-- <h2 style="font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;">
        <b>Contact Information </b> : @isset($role)
            {{ $role }}
        @endisset
    </h2> --}}
    <h2 style="font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;">
        <b>Email</b> : @isset($staffmail)
            {{ $staffmail }}
        @endisset
    </h2>
    <h2 style="font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;">
        <b>Phone Number</b> : @isset($staffmail)
            {{ $staffmail }}
        @endisset
    </h2>
    <h2 style="font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;">
        <b>Location/Address</b> : @isset($staffmail)
            {{ $staffmail }}
        @endisset
    </h2>
    <h2 style="font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;">
        <b>Description of Issue</b> : @isset($staffmail)
            {{ $staffmail }}
        @endisset
    </h2>
    <h2 style="font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;">
        <b>Urgency Level</b> : @isset($staffmail)
            {{ $staffmail }}
        @endisset
    </h2>
    <h2 style="font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;">
        <b>Permission to Enter</b> : @isset($staffmail)
            {{ $staffmail }}
        @endisset
    </h2>
    <h2 style="font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;">
        <b>Preferred Date and Time for Maintenance</b> : @isset($staffmail)
            {{ $staffmail }}
        @endisset
    </h2>
    <h2 style="font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;">
        <b>Attachments</b> : @isset($staffmail)
            {{ $staffmail }}
        @endisset
    </h2>
    <h2 style="font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;">
        <b>Maintenance Type</b> : @isset($staffmail)
            {{ $staffmail }}
        @endisset
    </h2>
    <h2 style="font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;">
        <b>Additional Notes:</b> : @isset($staffmail)
            {{ $staffmail }}
        @endisset
    </h2>
@endsection
