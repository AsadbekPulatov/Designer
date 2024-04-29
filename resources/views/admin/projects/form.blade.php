<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="row">
                        <div class="col-10">
                            <h1 class="card-title">@if($project->id){{'Обновить проект'}}@else{{'Добавить проект'}}@endif</h1>
                        </div>
                    </div>
                    <div class="row">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Ой!</strong>С вашим вводом возникли некоторые проблемы.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="@if($project->id) {{ route('projects.update', ['project' => $project->id]) }} @else {{ route('projects.store') }} @endif"
                              method="POST" enctype="multipart/form-data">
                            @csrf
                            @if($project->id)
                                @method('PUT')
                            @endif
                            <div class="form-group mb-3">
                                <label for="name">Имя</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Имя" value="{{$project->name}}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="description">Oписание</label>
                                <textarea name="description" class="form-control" id="description" placeholder="Oписание" rows="10">{{$project->description}}</textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="img">Добавьте рисунок <b><i>РАЗМЕР РИСУНОК:(600x300)</i></b></label>
                                <input type="file" name="img" class="form-control" id="img">
                            </div>

                            <div class="form-group  mb-3">
                                <label for="url">Ссылка</label>
                                <input type="url" name="url" class="form-control" id="url" placeholder="Ссылка" value="{{$project->url}}">
                            </div>

                            <button type="submit" class="btn btn-primary">Сохранить</button>
                            <input type="reset" class="btn btn-danger" value="Очистить">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
