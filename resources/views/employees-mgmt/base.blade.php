@extends('layouts.app-template')
@section('content')
  <div class="content-wrapper" dir="rtl">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="font-weight:bolder; text-transform:uppercase; font-family: 'Times New Roman', Times, serif">
          {{__('Employee Mangement')}}
      </h1>
    </section>
    @yield('action-content')
  </div>
@endsection
