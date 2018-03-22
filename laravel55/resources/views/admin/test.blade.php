@extends('admin/layouts/default')
@section('header_styles')

    <link rel="stylesheet" href="{{ asset('assets/vendors/Buttons/css/buttons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/pages/advbuttons.css') }}" />

@stop

@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">
            <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white" id="livicon-55" style="width: 16px; height: 16px;"><svg height="16" version="1.1" width="16" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative;" id="canvas-for-livicon-55"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#ffffff" stroke="none" d="M24,20V24H8V8H20L24,4H7C5.343,4,4,5.343,4,7V25C4,26.656,5.343,28,7,28H25C26.656,28,28,26.656,28,25V16L24,20Z" stroke-width="0" transform="matrix(0.5,0,0,0.5,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="#ffffff" stroke="none" d="M27.105,5.369L29.651,7.914999999999999C30.114,8.380999999999998,30.118,9.143999999999998,29.651,9.610999999999999L27.671,11.591L23.429,7.347999999999999L25.409,5.3679999999999986C25.877,4.9,26.637,4.9,27.105,5.369ZM12.817,20.788C12.817,20.788,12.817,17.959,15.646,15.131L22.722,8.055L26.964000000000002,12.298L19.888,19.373C17.060000000000002,22.201,14.232000000000003,22.202,14.232000000000003,22.202S12.524000000000003,23.322000000000003,12.111000000000002,22.908C11.668,22.468,12.817,20.788,12.817,20.788ZM17.202,18.1L23.57,11.733L22.72,10.884L16.351999999999997,17.252000000000002L17.202,18.1Z" transform="matrix(0.5,0,0,0.5,0,0)" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i> Flat Buttons
        </h3>
        <span class="pull-right">
                             <i class="glyphicon glyphicon-chevron-up clickable"></i>
                             <i class="glyphicon glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
    </div>
    <div class="panel-body">
        <div class="flatbuttons">
            <div class="text-left">
                Radiused Buttons
                <br>
                <ul>
                    <li>
                        <a href="#" class="button button-rounded button-default">Button</a>
                    </li>
                    <li>
                        <a href="#" class="button button-rounded button-primary">Button</a>
                    </li>
                    <li>
                        <a href="#" class="button button-rounded button-success">Button</a>
                    </li>
                    <li>
                        <a href="#" class="button button-rounded button-info">Button</a>
                    </li>
                    <li>
                        <a href="#" class="button button-rounded button-warning">Button</a>
                    </li>
                    <li>
                        <a href="#" class="button button-rounded button-danger">Button</a>
                    </li>
                </ul>
            </div>
            <div class="text-left">
                Rounded Buttons
                <br>
                <ul>
                    <li>
                        <a href="#" class="button button-pill button-default">Button</a>
                    </li>
                    <li>
                        <a href="#" class="button button-pill button-primary">Button</a>
                    </li>
                    <li>
                        <a href="#" class="button button-pill button-success">Button</a>
                    </li>
                    <li>
                        <a href="#" class="button button-pill button-info">Button</a>
                    </li>
                    <li>
                        <a href="#" class="button button-pill button-warning">Button</a>
                    </li>
                    <li>
                        <a href="#" class="button button-pill button-danger">Button</a>
                    </li>
                </ul>
            </div>
            <div class="text-left">
                Rectangle Box
                <br>
                <ul>
                    <li>
                        <a href="#" class="button button-default">Button</a>
                    </li>
                    <li>
                        <a href="#" class="button button-primary">Button</a>
                    </li>
                    <li>
                        <a href="#" class="button button-success">Button</a>
                    </li>
                    <li>
                        <a href="#" class="button button-info">Button</a>
                    </li>
                    <li>
                        <a href="#" class="button button-warning">Button</a>
                    </li>
                    <li>
                        <a href="#" class="button button-danger">Button</a>
                    </li>
                </ul>
            </div>
            <div class="text-left">
                Circle Buttons
                <br>
                <ul>
                    <li>
                        <a href="#" class="button button-circle button-large button-default">Button</a>
                    </li>
                    <li>
                        <a href="#" class="button button-circle button-large button-primary">Button</a>
                    </li>
                    <li>
                        <a href="#" class="button button-circle button-large button-success">Button</a>
                    </li>
                    <li>
                        <a href="#" class="button button-circle button-large button-info">Button</a>
                    </li>
                    <li>
                        <a href="#" class="button button-circle button-large button-warning">Button</a>
                    </li>
                    <li>
                        <a href="#" class="button button-circle button-large button-danger">Button</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@stop