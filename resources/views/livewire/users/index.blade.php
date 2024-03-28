<div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Created</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
              <tr wire:key='{{ $user->id }}'>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at->format('d-m-Y') }}</td>
              </tr>
          @endforeach
        </tbody>
      </table>
        {{ $users->links() }}
</div>
