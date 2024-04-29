<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="row">
                        <div class="col-md-9"><h1 class="card-title">Проекты</h1></div>
                        <div class="col-md-3">
                            <a class="btn btn-primary" href="{{route('projects.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                                Добавить проекты
                            </a>
                        </div>
                    </div>
                    <div class="row table-responsive">
                        <table class="table table-bordered text-center table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Имя</th>
                                <th scope="col">Oписание</th>
                                <th scope="col">Фото</th>
                                <th scope="col">Ссылка</th>
                                <th scope="col">Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($projects as $key => $project)
                                <tr>
                                    <td class="col-1">{{$key+1}}</td>
                                    <td>{{$project->name}}</td>
                                    <td>
                                        {{$project->description}}
                                    </td>
                                    <td class="col-2">
                                        <img src="{{asset('img/project/' . $project->img)}}" style="width: 150px; height: 150px;"
                                             alt="">
                                    </td>
                                    <td><a href="{{ $project->url }}">{{ $project->url }}</a></td>
                                    <td class="col-2">
                                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                                            <a class="btn btn-warning btn-sm"
                                               href="{{ route('projects.edit', $project->id)}}">
                                            <span class="btn-label">
                                                <i class="bi bi-pen"></i>
                                            </span>
                                            </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <span class="btn-label"><i class="bi bi-trash"></i></span>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
