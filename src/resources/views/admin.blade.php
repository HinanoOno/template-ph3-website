<!DOCTYPE html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
   
   
   
  </head>
  <body>
   
    
    <div class="container flex justify-center mx-auto py-6">
      <div class="flex flex-col">
          <div class="w-full">
              <div class="border-b border-gray-200 shadow">
                  <table>
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

                              </th>
                          </tr>
                      </thead>
                      <tbody class="bg-white">
                        @foreach ($questions as $question)
                          <tr class="whitespace-nowrap">
                              <td class="px-6 py-4">
                                <div class="text-sm text-gray-500">
                                {{$question->id}}
                                </div>
                              </td>
                              <td class="px-6 py-4">
                                <div class="text-sm text-gray-500">
                                {{$question->content}}
                                </div>
                              </td>
                              <td class="px-6 py-4">
                                <div class="text-sm text-gray-500">
                                {{$question->image}}
                                </div>
                              </td>
                              <td class="px-6 py-4">
                                <div class="text-sm text-gray-500">
                                {{$question->supplement}}
                                </div>
                              </td>
                              <td class="px-6 py-4">
                                <div class="text-sm text-gray-500">
                                <button class="px-4 py-1 text-sm text-blue-600 bg-blue-200 rounded-full">編集</button>
                                </div>
                              </td>
                       
                          </tr>
                        @endforeach
  
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
  
  
          
    
  
  </body>
</html>

