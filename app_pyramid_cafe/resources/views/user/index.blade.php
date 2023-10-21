@extends('layouts.main')

@section('container')
    <h1 class="app-page-title mb-4">Data Karyawan</h1>
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="/admin/user/delete">
                        @csrf
                        <div class="mt-4 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="select-all" id="select-all">
                                <label class="form-check-label" for="select-all">
                                    Select All
                                </label>
                            </div>
                        </div>
                        <div class="table-responsive mt-4">
                            <table  class="table table-striped table-outline">
                                <thead>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Role</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>
                                                @if ($user->level->id !== auth()->user()->id)
                                                    @if ($user->level->id === 1)
                                                        <label class="form-check-label">
                                                            Manager
                                                        </label>
                                                    @else
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="users[]" data-role="{{ $user->level->id }}"
                                                                value="{{ $user->id }}">
                                                        </div>
                                                    @endif
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="img rounded-circle me-3"
                                                        style="width: 50px; height: 50px; background-size: cover; background-position: center; background-image: url('<?= asset('storage/profile/' . $user->picture) ?>');">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span>{{ $user->email }}</span>
                                                        <small>Added: {{ $user->created_at->format('d/m/Y') }}</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                {{ $user->username === auth()->user()->username ? $user->username . '(You)' : $user->username }}
                                            </td>
                                            <td class="level">
                                                {{ $user->level->level }}
                                            </td>
                                            <td>
                                                <td>
                                                    <a href="/admin/user/{{$user->id}}/edit" class="btn btn-warning btn-sm">
                                                        Edit
                                                    </a>
                                                </td>
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="mt-4 d-flex justify-content-end align-items-center">
                                <button type="submit" class="btn btn-danger" id="delete-button">
                                    <i class="fa fa-trash"></i>
                                    Delete Selected (<span id="selected-count">0</span>)
                                </button>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        var checkboxes = document.querySelectorAll('input[name="users[]"]');
        var deleteBtn = document.querySelector('#delete-button');

        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                var selectedCount = document.querySelectorAll('input[name="users[]"]:checked').length;
                document.getElementById('selected-count').textContent = selectedCount;
            });
        });

        document.getElementById('select-all').addEventListener('change', function() {
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = event.target.checked;
            });
            var selectedCount = event.target.checked ? checkboxes.length : 0;
            document.getElementById('selected-count').textContent = selectedCount;
        });

        deleteBtn.addEventListener('click', function(event) {
            var selectedUsers = document.querySelectorAll('input[name="users[]"]:checked');
            var selectedCount = selectedUsers.length;

            if (selectedCount === 0) {
                event.preventDefault();
                alert('Please select at least one employee to delete.');
            } else if (selectedUsers[0].dataset.role === '1') {
                event.preventDefault();
                alert('The manager role cannot be deleted, it can only be edited.');
            } else {
                var confirmation = confirm('Are you sure you want to delete ' + selectedCount +
                    ' selected employee(s)?');
                if (!confirmation) {
                    event.preventDefault();
                }
            }
        });
    </script>
@endsection
