<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Kale</title>
    <style>
    body {
        text-align: center;
    }
    a:link {
            color: white;
            text-decoration: none;
        }

    a:active {
        color: white;
        text-decoration: none;
        }

    a:visited {
        color: white;
        text-decoration: none;
    }
    p {
		text-align: center;
	}
    </style>
</head>
<body>
<?php
require("koneksi.php");

function tampilbuku()
{
    $stmt = koneksi()->prepare("SELECT * FROM buku");
    $stmt->execute();
    $result = $stmt -> fetchAll();
    if(!empty($result)){
        foreach ($result as $buku) {
            echo "<tr>";
            echo "<td><p>". $buku['id_buku']."</p></td>";
            echo "<td><p>". $buku['judul_buku']."</p></td>";
            echo "<td><p>". $buku['penulis']."</p></td>";
            echo "<td><p>". $buku['penerbit']."</p></td>";
            echo "<td><p>". $buku['tahun_terbit']."</p></td>";
            echo "<td>"."<button class=link_none> <a href = 'formbuku.php?id_buku=".$buku['id_buku']."'>Edit</a> </button>";
            echo "<button class=link_none><a href='buku.php?id_buku=" . $buku['id_buku'] . "' onclick=\"return confirm('Anda yakin ingin menghapusnya?')\">Hapus</a> </button></td>";
            echo "</tr>";
        }
    }
}

function tambahBuku($id,$judul,$penulis,$penerbit,$tahun)
{
    $sql = "INSERT INTO buku(id_buku,judul_buku,penulis,penerbit,tahun_terbit)values(:id_b,:judul_b,:penulis,:penerbit,:tahun)";
    $stmt = koneksi()->prepare($sql);
    $result = $stmt->execute(array(':id_b' => $id, 'judul_b'=>$judul,':penulis'=>$penulis,':penerbit'=>$penerbit,':tahun'=>$tahun));
    if (!empty($result)) {
        header('location:buku.php');
    }
}
function editbuku(){
    $stmt = koneksi()->prepare("SELECT * FROM buku WHERE id_buku =".$_GET['id_buku']);
    $stmt->execute();
    $GLOBALS['result'] = $stmt->fetchAll();
}
function updatebuku($id,$judul,$penulis,$penerbit,$tahun)
{
    $pdo_statement = koneksi()->prepare(
        "update buku set judul_buku='" . $judul . "', penulis='" . $penulis . "', penerbit='" . $penerbit . "', tahun_terbit='" . $tahun . "' where id_buku=" . $id
    );
    $result = $pdo_statement->execute();
    if($result){
        header('location:buku.php');
    }
}
function hapusbuku($id_buku){
    $stmt = koneksi()->prepare("DELETE FROM buku where id_buku=" . $id_buku);
    $result = $stmt->execute();
    if ($result) {
        header('location:buku.php');
    }
}
function tampilmember()
{
    $stmt = koneksi()->prepare("SELECT * FROM member");
    $stmt->execute();
    $result = $stmt -> fetchAll();
    if(!empty($result)){
        foreach ($result as $member) {
            echo "<tr>";
            echo "<td><p>". $member['id_member']."</p></td>";
            echo "<td><p>". $member['nama_member']."</p></td>";
            echo "<td><p>". $member['nomor_member']."</p></td>";
            echo "<td><p>". $member['alamat']."</p></td>";
            echo "<td><p>". $member['tgl_mendaftar']."</p></td>";
            echo "<td><p>". $member['tgl_terakhir_bayar']."</p></td>";
            echo "<td><p>"."<button class=link_none><a href = 'formmember.php?id_member=".$member['id_member']."'>Edit </a> </button>";
            echo "<button class=link_none><a href='member.php?id_member=" . $member['id_member'] . "' onclick=\"return confirm('lanjut delete ?')\">Hapus </a> </button></td>";
            echo "</tr>";
        }
    }
}

function tambahmember($id,$nama,$nomor,$alamat,$tgldaftar,$tglbayar)
{
    $sql = "INSERT INTO member(id_member,nama_member,nomor_member,alamat,tgl_mendaftar,tgl_terakhir_bayar)values(:id_m,:nama_m,:no_m,:alamat,:tgl_daf,:tgl_bay)";
    $stmt = koneksi()->prepare($sql);
    $result = $stmt->execute(array(':id_m' => $id, 'nama_m'=>$nama,':no_m'=>$nomor,':alamat'=>$alamat,':tgl_daf'=>$tgldaftar,':tgl_bay'=>$tglbayar));
    if (!empty($result)) {
        header('location:member.php');
    }
}
function editmember(){
    $stmt = koneksi()->prepare("SELECT * FROM member WHERE id_member =".$_GET['id_member']);
    $stmt->execute();
    $GLOBALS['result'] = $stmt->fetchAll();
}
function updatemember($id,$nama,$no,$alamat,$tgldaftar,$tglbayar)
{
    $pdo_statement = koneksi()->prepare(
        "update member set nama_member='" . $nama . "', nomor_member ='" . $no . "', alamat='" . $alamat . "', tgl_mendaftar='" . $tgldaftar . "', tgl_terakhir_bayar='".$tglbayar."' where id_member=" . $id
    );
    $result = $pdo_statement->execute();
    if($result){
        header('location:member.php');
    }
}
function hapusmember($id_member){
    $stmt = koneksi()->prepare("DELETE FROM member WHERE id_member=".$id_member);
    $result= $stmt->execute();
    if($result){
        header('location:member.php');
    }
}
function tampilpeminjaman()
{
    $stmt = koneksi()->prepare("SELECT * FROM peminjaman");
    $stmt->execute();
    $result = $stmt -> fetchAll();
    if(!empty($result)){
        foreach ($result as $peminjaman) {
            echo "<tr>";
            echo "<td><p>". $peminjaman['id_peminjaman']."</p></td>";
            echo "<td><p>". $peminjaman['tgl_peminjaman']."</p></td>";
            echo "<td><p>". $peminjaman['tgl_kembali']."</p></td>";
            echo "<td><p>"."<button class=link_none><a href = 'form6?id_peminjaman=".$peminjaman['id_peminjaman']."'>Edit</a></button>";
            echo "<button class=link_none><a href='peminjaman.php?id_peminjaman=" . $peminjaman['id_peminjaman'] . "' onclick=\"return confirm('lanjut delete ?')\">Hapus</a></button> </td>";
            echo "</tr>";
        }
    }
}

function tambahpeminjaman($id,$tglpinjam,$tglbalik)
{
    $sql = "INSERT INTO peminjaman(id_peminjaman,tgl_peminjaman,tgl_kembali)values(:id_p,:tgl_pinjam,:tgl_balik)";
    $stmt = koneksi()->prepare($sql);
    $result = $stmt->execute(array(':id_p' => $id,':tgl_pinjam'=>$tglpinjam,':tgl_balik'=>$tglbalik));
    if (!empty($result)) {
        header('location:peminjaman.php');
    }
}
function editpeminjaman(){
    $stmt = koneksi()->prepare("SELECT * FROM peminjaman WHERE id_peminjaman =".$_GET['id_peminjaman']);
    $stmt->execute();
    $GLOBALS['result'] = $stmt->fetchAll();
}
function updatepeminjaman($id,$tglpinjam,$tglbalik)
{
    $pdo_statement = koneksi()->prepare(
        "update peminjaman set tgl_peminjaman='" . $tglpinjam . "', tgl_kembali='" . $tglbalik . "' where id_peminjaman=" . $id
    );
    $result = $pdo_statement->execute();
    if($result){
        header('location:peminjaman.php');
    }
}
function hapuspeminjaman($id_peminjaman){
    $stmt = koneksi()->prepare("DELETE FROM peminjaman WHERE id_peminjaman=".$id_peminjaman);
    $result= $stmt->execute();
    if($result){
        header('location:peminjaman.php');
    }
}
?>
</body>
</html>