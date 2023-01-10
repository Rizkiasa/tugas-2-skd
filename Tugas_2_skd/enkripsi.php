<section>

    <div>
        <h1 class="h1 text-gray-900 mb-4 text-center">Form Enkripsi</h1>
            <form class="user" method="POST">
                <div class="form-group">
                    <input id="username" type="text" name="input_text" placeholder="Masukkan text" required>
                </div>
                    <input type="submit" name="enkripsi" value="Enkripsi">
            </form>
    </div>

    <?php
        if(isset($_POST['enkripsi'])){

            $text_input = $_POST['input_text'];

            $kunci = array('a' => '_+b;_', 'u' => '_.s,_', 'e' =>
                            '_*z#_', 'o' => '_,e>_', 'i' => '_=s*_',
                            'A' => '_;l+_', 'I' => '_-b=_', 'U' =>
                            '_,*._', 'E' => '_#w*_', 'O' => '_,v<_',' ' => '_'
            );
            
            $enkripsi = str_replace(array_keys($kunci), $kunci, $text_input);
            
            echo "<p> Text yang dienkripsi :
            <strong>"."$text_input"."</strong></p>
             <p> Hasil Enkripsi :
            <strong>"."$enkripsi"."</strong></p>
             ";

        }
    ?>            

</section>
<hr>