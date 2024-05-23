@extends('layout.main')

@section('content')
    <div class="container text-white ">
        <h1 class=" text-center py-4">Le nostre Vigne</h1>

        <table class="table">
            <thead>
                <tr class="text-center">
                    <th scope="col">ID</th>
                    <th scope="col">Winery</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($wineries as $winery)
                    <tr class="text-center">
                        <td>{{ $winery->id }}</td>
                        <td>
                            <form action="{{ route('wineries.update', $winery) }}" method="POST"
                                id="form-edit-{{ $winery->id }}">
                                @csrf
                                @method('PUT')
                                <input type="text" value="{{ $winery->name }}" class=" border-0" name="name">
                            </form>
                        </td>
                        <td>
                            <div class="d-flex justify-content-center ">
                                <button class="btn btn-warning me-2" onclick="submitForm({{ $winery->id }})"><i
                                        class="fa-solid fa-pen"></i></button>
                                <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>

    </div>
@endsection

<script>
    function submitForm(id) {
        const form = document.getElementById(`form-edit-${id}`);
        form.submit();
    }
</script>
