@extends('layouts.main')

@section('container')

<main>

    <div class="row">
        <div class="col-3">
          <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
            <nav class="nav flex-column">
              <strong><a class="nav-link" href="#item-1" style="text-decoration: none; color: #404040">Sorting</a></strong>
              <nav class="nav flex-column">
                <a class="nav-link ms-3 my-1" href="#item-1-1" style="text-decoration: none; color: #066AC9">Bubble Sort</a>
                <a class="nav-link ms-3 my-1" href="#item-1-2" style="text-decoration: none; color: #066AC9">Selection Sort</a>
                <a class="nav-link ms-3 my-1" href="#item-1-3" style="text-decoration: none; color: #066AC9">Insertion Sort</a>
                <a class="nav-link ms-3 my-1" href="#item-1-4" style="text-decoration: none; color: #066AC9">Merge Sort</a>
                <a class="nav-link ms-3 my-1" href="#item-1-5" style="text-decoration: none; color: #066AC9">Quick Sort</a>
              </nav>
              <strong><a class="nav-link" href="#item-2" style="text-decoration: none; color: #404040">Stack and Queue</a></strong>
              <nav class="nav flex-column">
                <a class="nav-link ms-3 my-1" href="#item-2-1" style="text-decoration: none; color: #066AC9">Konsep Dasar Stack</a>
                <a class="nav-link ms-3 my-1" href="#item-2-2" style="text-decoration: none; color: #066AC9">Konsep Dasar Queue</a>
              </nav>
            </nav>
          </nav>
        </div>


    <div class="col-8">
        <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
          <div id="item-1-1">
            <h5>Bubble Sort</h5>
            <img src="img/sort/7.png" class="rounded mx-auto d-block w-100" alt="..."><br>
            {{-- <div class="container text-center">
                <div class="row">
                  <div class="col">
                    <img src="img/sort/1.png" class="rounded mx-auto d-block w-100" alt="..."><br>
                  </div>
                  <div class="col">
                    <img src="img/sort/1.png" class="rounded mx-auto d-block w-100" alt="..."><br>
                  </div>
                </div>
            </div> --}}
            <p>Implementasikan algoritma bubble sort pada data yang diberikan dalam format list/array menggunakan bahasa pemrograman python. Analisis dan diskusikan efisiensi setiap algoritma. Berikut data yang digunakan: 64, 34, 25, 12, 22, 11, 90</p>
            <br>
            <div class="editor-container" style="justify-content: center">
                <div class="container" style="background-color: #E6F0F9; border-block-color: none;">
                    <br><br>
                    <!-- Editor Kode -->
                    <textarea id="code-editor"></textarea><br>
                    <button id="run-code">Run Code</button>
                    <br><br>
                    <h3>Output</h3>
                    <pre id="output"></pre>
                    <br><br>
                </div>

            <script>
                // Inisialisasi CodeMirror
                var editor = CodeMirror.fromTextArea(document.getElementById("code-editor"), {
                    mode: "python",
                    lineNumbers: true,
                    theme: "default"
                });

                // Menangani klik tombol "Run Code"
                document.getElementById("run-code").addEventListener("click", function() {
                    var code = editor.getValue();

                    fetch('/execute', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify({ code: code })
                    })
                    .then(response => response.json())
                    .then(data => {
                        document.getElementById("output").textContent = data.output;
                    })
                    .catch(error => {
                        document.getElementById("output").textContent = 'Error: ' + error;
                    });
                });
            </script>

            <!-- CSRF Token Laravel -->
            <meta name="csrf-token" content="{{ csrf_token() }}">
            </div>

          <br><br>

          <div id="item-1-2">
            <h5>Selection Sort</h5>
            <img src="img/sort/9.png" class="rounded mx-auto d-block w-100" alt="..."><br>
            <p>Implementasikan algoritma selection sort pada data yang diberikan dalam format list/array menggunakan bahasa pemrograman python. Analisis dan diskusikan efisiensi setiap algoritma. Berikut data yang digunakan: 64, 25, 12, 22, 11</p>
            <div class="editor-container" style="justify-content: center">
                <div class="editor">
                    <textarea id="code" rows="10" cols="40"></textarea>
                    <button onclick="runCode()">Run</button>
                </div>
                <div class="output" id="output"></div>
              </div>
              <script>
                  function runCode() {
                        var code = document.getElementById('code').value;
                        var output = document.getElementById('output');
                        output.innerHTML = code;
                        }
              </script>
            </div>

          <br><br>

          <div id="item-1-3">
            <h5>Insertion Sort</h5>
            <img src="img/sort/9.png" class="rounded mx-auto d-block w-100" alt="..."><br>
            <p>Implementasikan algoritma insertion sort pada data yang diberikan dalam format list/array menggunakan bahasa pemrograman python. Analisis dan diskusikan efisiensi setiap algoritma. Berikut data yang digunakan: 64, 25, 12, 22, 11</p>
            <br>
            <div class="editor-container" style="justify-content: center">
                <div class="editor">
                    <textarea id="code" rows="10" cols="40"></textarea>
                    <button onclick="runCode()">Run</button>
                </div>
                <div class="output" id="output"></div>
              </div>
              <script>
                  function runCode() {
                        var code = document.getElementById('code').value;
                        var output = document.getElementById('output');
                        output.innerHTML = code;
                        }
              </script>
          </div>

          <br><br>

          <div id="item-1-4">
            <h5>Merge Sort</h5>
            <img src="img/sort/9.png" class="rounded mx-auto d-block w-100" alt="..."><br>
            <p>Implementasikan algoritma merge sort pada data yang diberikan dalam format list/array menggunakan bahasa pemrograman python. Analisis dan diskusikan efisiensi setiap algoritma. Berikut data yang digunakan: 64, 25, 12, 22, 11</p>
            <br>
            <div class="editor-container" style="justify-content: center">
                <div class="editor">
                    <textarea id="code" rows="10" cols="40"></textarea>
                    <button onclick="runCode()">Run</button>
                </div>
                <div class="output" id="output"></div>
              </div>
              <script>
                  function runCode() {
                        var code = document.getElementById('code').value;
                        var output = document.getElementById('output');
                        output.innerHTML = code;
                        }
              </script>
          </div>

          <br><br>

          <div id="item-1-5">
            <h5>Quick Sort</h5>
            <img src="img/sort/9.png" class="rounded mx-auto d-block w-100" alt="..."><br>
            <p>Implementasikan algoritma quick sort pada data yang diberikan dalam format list/array menggunakan bahasa pemrograman python. Analisis dan diskusikan efisiensi setiap algoritma. Berikut data yang digunakan: 64, 25, 12, 22, 11</p>
            <br>
            <div class="editor-container" style="justify-content: center">
                <div class="editor">
                    <textarea id="code" rows="10" cols="40"></textarea>
                    <button onclick="runCode()">Run</button>
                </div>
                <div class="output" id="output"></div>
              </div>
              <script>
                  function runCode() {
                        var code = document.getElementById('code').value;
                        var output = document.getElementById('output');
                        output.innerHTML = code;
                        }
              </script>
          </div>
          {{-- <div id="item-2">
            <h4>Stack & Queue</h4>
            <img src="img/sort/9.png" class="rounded mx-auto d-block w-100" alt="..."><br>
            <p>Implementasikan algoritma selection sort pada data yang diberikan dalam format list/array menggunakan bahasa pemrograman python. Analisis dan diskusikan efisiensi setiap algoritma. Berikut data yang digunakan: 64, 25, 12, 22, 11</p>
            <br><br>
            <div class="editor-container" style="justify-content: center">
                <div class="editor">
                    <textarea id="code" rows="10" cols="40"></textarea>
                    <button onclick="runCode()">Run</button>
                </div>
                <div class="output" id="output"></div>
              </div>
              <script>
                  function runCode() {
                        var code = document.getElementById('code').value;
                        var output = document.getElementById('output');
                        output.innerHTML = code;
                        }
              </script>
          </div> --}}

          <br><br>

          <div id="item-2-1">
            <h5>Konsep Dasar Stack</h5>
            <img src="img/sort/9.png" class="rounded mx-auto d-block w-100" alt="..."><br>
            <p>Implementasikan algoritma stack pada data yang diberikan dalam format list/array menggunakan bahasa pemrograman python. Analisis dan diskusikan efisiensi setiap algoritma. Berikut data yang digunakan: 64, 25, 12, 22, 11</p>
            <br>
            <div class="editor-container" style="justify-content: center">
                <div class="editor">
                    <textarea id="code" rows="10" cols="40"></textarea>
                    <button onclick="runCode()">Run</button>
                </div>
                <div class="output" id="output"></div>
              </div>
              <script>
                  function runCode() {
                        var code = document.getElementById('code').value;
                        var output = document.getElementById('output');
                        output.innerHTML = code;
                        }
              </script>
          </div>

          <br><br>

          <div id="item-2-2">
            <h5>Konsep Dasar Queue</h5>
            <img src="img/sort/9.png" class="rounded mx-auto d-block w-100" alt="..."><br>
            <p>Implementasikan algoritma queue pada data yang diberikan dalam format list/array menggunakan bahasa pemrograman python. Analisis dan diskusikan efisiensi setiap algoritma. Berikut data yang digunakan: 64, 25, 12, 22, 11</p>
            <br>
            <div class="editor-container" style="justify-content: center">
                <div class="editor">
                    <textarea id="code" rows="10" cols="40"></textarea>
                    <button onclick="runCode()">Run</button>
                </div>
                <div class="output" id="output"></div>
              </div>
              <script>
                  function runCode() {
                        var code = document.getElementById('code').value;
                        var output = document.getElementById('output');
                        output.innerHTML = code;
                        }
              </script>
          </div>
        </div>
    </div>
</div>





</main>


@endsection

