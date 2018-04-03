@extends('layouts.master')

@push('head')
    {{-- Page specific CSS includes should be defined here; this .css file does not exist yet, but we can create it --}}
    <link href='/css/splitterForm.css' type='text/css' rel='stylesheet'>
@endpush

@section('form')
    <div class="title">Bill Splitter</div>

    <div class='container-fluid'>
        <div class='billSplitterForm'>
            <form method='GET' action='index.php'>
                <div class='row-fluid'>
                    <label>Split how many ways?</label>
                    <input type='text' name='splitTerm' placeholder='Required*'/>
                </div>
                <div class='row-fluid'>
                    <label>How much was the tab?</label>
                    <input type='text' name='billAmount' placeholder='Required*'/>
                </div>

                <div class='row-fluid'>
                    <label>How was the the service?</label>
                    <select name='tipAmount'>
                        <!-- echo selected on appropriate tip amount selected for refresh -->
                        <option value='0'>Choose tip...</option>
                        <option value='15' >Poor (15%)</option>
                        <option value='18'>Good (18%)</option>
                        <option value='20'>Excellent (20%)</option>
                        <option value='25'>Outstanding (25%)</option>
                    </select>

                    <div class='row-fluid'>
                        <label>Round up?</label>
                        <input type='checkbox' name='roundUp' />
                    </div>

                    <input type='submit' value='Calculate'>
            </form>
        </div>
    </div>



@endsection