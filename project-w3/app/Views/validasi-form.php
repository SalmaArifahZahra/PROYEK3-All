<h3>Form Input</h3>
<form action="#" method="post">
    <table>
      <tr>
        <td><label for="nip">NIP</label></td>
        <td><input type="text" id="nip" name="nip"></td>
      </tr>
      <tr>
        <td><label for="nama">Nama</label></td>
        <td><input type="text" id="nama" name="nama"></td>
      </tr>
      <tr>
        <td>Gender</td>
        <td>
          <input type="radio" id="pria" name="gender" value="Pria">
          <label for="pria">Pria</label>
          <input type="radio" id="wanita" name="gender" value="Wanita">
          <label for="wanita">Wanita</label>
        </td>
      </tr>
      <tr>
        <td><label for="telp">Telp</label></td>
        <td><input type="text" id="telp" name="telp"></td>
      </tr>
      <tr>
        <td><label for="email">Email</label></td>
        <td><input type="email" id="email" name="email"></td>
      </tr>
      <tr>
        <td colspan="2" style="text-align:center;">
          <button type="submit">Submit</button>
           <a href="<?= base_url('/') ?>" class="btn btn-secondary">Back</a>
        </td>
      </tr>
    </table>
</form>