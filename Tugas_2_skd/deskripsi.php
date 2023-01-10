<section>

    <div>
        <h1 class="h1 text-gray-900 mb-4 text-center">Form Deskripsi</h1>
            <form class="user" method="POST">
                <div class="form-group">
                    <input id="username" type="text" name="input_text" placeholder="Masukkan text" required>
                </div>
                    <input type="submit" name="deskripsi" value="Deskripsi">
            </form>
    </div>

    <?php
        if(isset($_POST['deskripsi'])){
            
            $text_input = $_POST['input_text'];
           
            $kunci = array('_+b;_' => 'a', '_=s*_' => 'i', '_.s,_' =>
                            'u', '_*z#_' => 'e', '_,e>_' => 'o',
                            '_;l+_' => 'A', '_-b=_' => 'I', '_,*._' =>
                            'U', '_#w*_' => 'E', '_,v<_' => 'O','_' => ' '
            );

            $deskripsi = str_replace(array_keys($kunci), $kunci, $text_input);

            echo "<p> Text yang dideskripsi :
           <strong>"."$text_input"."</strong></p>
            <p> Hasil Deskripsi :
           <strong>"."$deskripsi"."</strong></p>
            ";

        }
   ?>          

</section>
<hr>