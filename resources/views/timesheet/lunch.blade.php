<form action="{{ route('clockin', [$item->company_id]) }}" method="POST">
    @csrf
    <input type="hidden" name="type" value="clockout">
    <input type="hidden" name="time" value="{{ Carbon\Carbon::now() }}">
    <button class="btn btn-sm btn-outline-primary tx-gray-500 small">
        <i data-feather="clock" class="wd-15 align-middle mr-1"></i>Clock Out
    </button>
</form>
