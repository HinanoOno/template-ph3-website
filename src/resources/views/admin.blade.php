<x-adminapp>
  <x-slot name='slot'>
    @if (session('success'))
      <div class="bg-blue-100 border border-blue-500 text-blue-700 px-4 py-3 rounded" role="alert">
        <p class="text-sm">{{session('success')}}</p>
      </div>
    @elseif(session('fail'))
      <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded" role="alert">
        <p class="text-sm">{{ session('fail') }}</p>
      </div>
   
    @endif
    <div class="flex flex-col">
      <div class="w-full">
          <div class="border-b border-gray-200 shadow w-full">
              <table class="w-full" >
                  <thead class="bg-gray-50">
                      <tr>
                          <th class="px-6 py-2 text-xs text-gray-500">
                              ID
                          </th>
                          <th class="px-6 py-2 text-xs text-gray-500">
                              質問
                          </th>
                          <th class="px-6 py-2 text-xs text-gray-500">
                              画像
                          </th>
                          <th class="px-6 py-2 text-xs text-gray-500">
                              補足
                          </th>
                          <th class="px-6 py-2 text-xs text-gray-500">
                              選択肢1
                          </th>
                          <th class="px-6 py-2 text-xs text-gray-500">
                              選択肢2
                          </th>
                          <th class="px-6 py-2 text-xs text-gray-500">
                              選択肢3
                          </th>

                          <th class="px-6 py-2 text-xs text-gray-500">

                          </th>
                          <th class="px-6 py-2 text-xs text-gray-500">

                          </th>
                      </tr>
                  </thead>
                  <tbody class="">
                    @foreach ($questions as $question)
                      @if($question->deleted_at == NULL)
                      <tr class="whitespace-nowrap">
                          <td class="px-6 py-4">
                            <div class="text-sm text-gray-500">
                            {{$question->id}}
                            </div>
                          </td>
                          <td class="px-6 py-4">
                            <div class="text-sm text-gray-500 overflow-scroll w-60">
                            {{$question->content}}
                            </div>
                          </td>
                          <td class="px-6 py-4">
                            <div class="w-60">
                              <img src="{{asset('storage/'.$question->image)}}" alt="" >
                            </div>
                          </td>
                          <td class="px-6 py-4">
                            <div class="text-sm text-gray-500 overflow-scroll w-40">
                            {{$question->supplement}}
                            </div>
                          </td>
                          @foreach($question->choices as $choice)
                          <td class="px-6 py-4">
                            <div class="text-sm text-gray-500 overflow-scroll w-30">
                            {{$choice->name}}
                            </div>
                          </td>
                          @endforeach
                          <td class="px-6 py-4">
                            <div class="text-sm text-gray-500">
                            <button class="px-4 py-1 text-sm text-blue-600 bg-blue-200 rounded-full"><a href='{{route('admin.edit',$question->id)}}'>編集</a></button>
                            </div>
                          </td>
                          <td class="px-6 py-4">
                            <div class="text-sm text-gray-500">
                            <form  method='post' action="{{route('admin.destroy',$question)}}">
                              @csrf
                              @method('delete')
                              <button class="px-4 py-1 text-sm text-red-600 bg-red-200 rounded-full" onclick='delete_alert()'>削除</button>

                            </form>
                            </div>
                          </td>
                   
                      </tr>
                      @else
                      <tr class="whitespace-nowrap bg-gray-200">
                        <td class="px-6 py-4">
                          <div class="text-sm text-gray-500">
                          {{$question->id}}
                          </div>
                        </td>
                        <td class="px-6 py-4">
                          <div class="text-sm text-gray-500 overflow-scroll w-60">
                          {{$question->content}}
                          </div>
                        </td>
                        <td class="px-6 py-4">
                          <div class="w-60">
                            <img src="{{asset('storage/'.$question->image)}}" alt="" >
                          </div>
                        </td>
                        <td class="px-6 py-4">
                          <div class="text-sm text-gray-500 overflow-scroll w-40">
                          {{$question->supplement}}
                          </div>
                        </td>
                        @foreach($question->choices()->withTrashed()->get() as $choice)
                        <td class="px-6 py-4">
                          <div class="text-sm text-gray-500 overflow-scroll w-30">
                          {{$choice->name}}
                          </div>
                        </td>
                        @endforeach
                      </tr>
                      @endif

                    @endforeach
                  
                  </tbody>
              </table>
              <div class="mt-1 mb-1 row justify-content-center">
                {{ $questions->links() }}
              </div>

          </div>
      </div>
    </div>
    <script>
      function delete_alert(){
        window.confirm('本当に削除しますか')
      }
    </script>
  </x-slot>

        
</x-adminapp>
     