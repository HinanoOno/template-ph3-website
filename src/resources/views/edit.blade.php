<x-adminapp>
  <x-slot name='slot'>
    @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
   
    <form method="post" action="{{ route('admin.update', $question) }}" enctype="multipart/form-data">
      @csrf
      @method('patch')
      <div class="mb-6">
        <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">質問</label>
        <input type="text" name="content" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  value="{{old('content',$question->content) }}" required>
      </div>
      <div class="mb-6">
        <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">画像</label>
        <input type="file" name="image"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('image',$question->image) }}" required>
      </div>
      <div class="mb-6">
        <label for="supplement" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">補足</label>
        <input type="text" name="supplement"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('supplement',$question->supplement) }}" >
      </div>
      <div class="mb-6">
        <label for="choice1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">選択肢1</label>
        <input type="text" name="choice1"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required value='{{old('choice1',$question->choices[0]['name'])}}' >
      </div>
      <div class="mb-6">
        <label for="choice2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">選択肢2</label>
        <input type="text" name="choice2"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required value='{{old('choice2',$question->choices[1]['name'])}}'>
      </div>
      <div class="mb-6">
        <label for="choice3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> 選択肢3</label>
        <input type="text" name="choice3"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required value='{{old('choice3',$question->choices[2]['name'])}}'>
      </div>
      <div class="mb-6">
        <label for="answer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">正解の選択肢</label>
        <input type="radio" name="answer" value="1" <?php if ($question->choices[0]['valid']==1){print('checked');}?>{{ old('answer') == 1? 'checked' : '' }}>選択肢1
        <input type="radio" name="answer" value="2" <?php if ($question->choices[1]['valid']==1){print('checked');} ?>{{ old('answer') == 2? 'checked' : '' }}>選択肢2
        <input type="radio" name="answer" value="3" <?php if ($question->choices[2]['valid']==1){print('checked');} ?>{{ old('answer') == 3? 'checked' : '' }}>選択肢3

      </div>
      
      <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>

  

  </x-slot>
</x-adminapp>