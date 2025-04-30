<h1>Program Studi</h1>

<table>
    <tr>
        <th>nama</th>
        <th>Singkatan</th>
        <th>Kaprodi</th>
        <th>Sekrearis</th>
        <th>Fakultas</th>
    </tr>
@foreach ($prodi as $item)
    <tr>
        <td>{{ $item->nama}}</td> 
        <td>{{$item->singkatan}}</td>
        <td>{{$item->Kaprodi}}</td>
        <td>{{$item->sekretaris}}</td>
@endforeach
</table>