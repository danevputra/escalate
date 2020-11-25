<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up Page</title>
    </head>
    <body>
        <h3>Sign Up Form</h3>
        <form action="signup_proc.php" method="POST">
            <p>
                <label for ="username">Username</label>
                <input type="text" name="username" placeholder="Username" required> 
            </p>
            <p>
                <label for ="password">Password</label>
                <input type="password" name="password" placeholder="Password" required> 
            </p>
            <p>
                <label for ="nama">Nama UMKM</label>
                <input type="text" name="nama" placeholder="Nama UMKM" required> 
            </p>
            <p>
            <label for="bidang">Bidang UMKM </label>
            <select name="bidang">
                <option value=1>Fashion</option>
                <option value=2>Skin Care dan Kosmetik</option>
                <option value=3>Perlengkapan Bayi</option>
                <option value=4>MUA</option>
                <option value=5>Kuliner</option>
                <option value=6>Furnitur</option>
                <option value=7>Jasa Foto dan Video</option>
                <option value=8>Buku</option>
            </select>
            </p>
            
            <p>
                <label for ="alamat">Alamat</label>
                <textarea name="alamat" required></textarea> 
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar">
            </p> 
        </form>
    </body>
</html>
