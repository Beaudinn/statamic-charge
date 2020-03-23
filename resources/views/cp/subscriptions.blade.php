@extends('statamic::layout')

@section('title', 'Charge')

@section('content')
    <div class="flex items-center justify-between mb-3">
        <h1>Subscriptions</h1>
    </div>
    <div class="p-0 card">
        <table class="data-table">
            <thead>
                <tr>
                    <th scope="col">Email</th>
                    <th scope="col">Plan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Expiry</th>
                    <th scope="col" class="actions-column"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subscriptions as $subscription)
                    <tr>
                        <td>{{ $subscription->user->email }}</td>
                        <td>{{ $subscription->stripe_plan }}</td>
                        <td>{{ $subscription->stripe_status }}</td>
                        <td>{{ $subscription->ends_at }}</td>
                        <td>
                            <dropdown-list>
                                <dropdown-item
                                    class="warning"
                                    text="Cancel"
                                    redirect="{{ cp_route('charge.cp.subscription.cancel', ['name' => $subscription->name]) }}"
                                ></dropdown-item>
                            </dropdown-list>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection