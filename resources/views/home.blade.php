@extends('spark::layouts.app')

@section('content')
<home :user="user" inline-template>
    <div class="container">
        <!-- Application Dashboard -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        Welcome to LifeChanger
                    </div>
                </div>
            </div>
        </div>

        <!-- Application Dashboard -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Time to have a life changing experience</div>

                    <div class="panel-body">
                        This service provides the ability to call some legendary personalities
                    </div>

                     @if ( empty(Auth::user()->subscriptions()->get()))

                    @else
                        <div class="panel-body">
                            Speak to Facebook Customer Call Center to solve your problems
                            <a href={{ route('fbk') }} class="btn btn-info">Call Mark Zuckerberg</a>
                        </div>

                         <div class="panel-body">
                            Speak to Justice League to solve your problems

                            @if( (Auth::user()->sparkPlan()->id === 'bronze') || (Auth::user()->sparkPlan()->id === 'silver') )
                                <a href={{ route('jl') }} class="btn btn-info">Call Justice league</a>
                            @else
                                <a href={{ url('/settings#/subscription') }} class="btn btn-info">Upgrade to Bronze Plan</a>
                            @endif

                        </div>

                         <div class="panel-body">
                            Speak to Bill Gates to solve your problems

                            @if( Auth::user()->sparkPlan()->id === 'silver' )
                                <a href={{ route('bg') }} class="btn btn-info">Call Bill Gates</a>
                            @else
                                <a href={{ url('/settings#/subscription') }} class="btn btn-info">Upgrade to Silver Plan</a>
                            @endif
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</home>
@endsection
