
    @foreach ($calon as $dt)
    <table class="table">
        <tbody>
            <tr>
                <th>Nama</th>
                <td>{{ $dt->calon_id}}</td>
            </tr>
            <tr>
                <th>Nama Anak</th>
                <td>{{ $dt->nama}}</td>
            </tr>
        </tbody>
    </table>
    @endforeach
