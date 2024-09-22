<?php

namespace App\Controllers;

use App\Models\M_order;
use CodeIgniter\Controller;

class Home extends BaseController
{
    public function order(){
   
        $model = new M_order();
        $where = array('id_user' => session()->get('id'));
        $where1 = array('barang.delete' => '0');
        $where2 = array('barang.status' => 'tersedia');
        $data['satu'] = $model->tampilWhere2('barang',$where1,$where2);
        $where = array('id_setting' => 1);
        $data['setting'] = $model->getwhere('setting', $where);
        $data['menus'] = $model->getFilteredMenu();
        echo view('header',$data);
        echo view('menu',$data);
        echo view('order',$data);
        echo view('footer');
}


    public function index()
    {
        echo view('header');
        echo view('menu');
        echo view('index');
        echo view('footer');
    }

    public function dashboard()
    {
        echo view('header');
        echo view('menu');
        echo view('dashboard');
        echo view('footer');
    }
   
    public function setting(){
  
        $model = new M_order();
        $where = array('id_user' => session()->get('id'));
        $data['satu'] = $model->getwhere('user', $where);
        $where = array('id_setting' => 1);
        echo view('header');
        echo view('setting',$data);
        echo view('footer');
    }

    public function signup() {
    $model = new M_order();
    $where = array('id_setting' => 1);
    $data['setting'] = $model->getwhere('setting', $where);
    echo view('header', $data);
    echo view('signup', $data);
}

public function aksi_signup() {
    $model = new M_order();
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');

    // Hash password dengan md5
    $data = array(
        'username' => $username,
        'password' => md5($password),
        'foto' => 'bread.png'
    );

    $model->tambah('user', $data);
    return redirect()->to('home/login');
}

public function login() {
    echo view('header');
    echo view('login');
}
       public function aksilogin()
{
    $u = $this->request->getPost('username');
    $p = $this->request->getPost('password');

    $model = new M_order();
    $where = [
        'username' => $u,
        'password' => $p
    ];

    $cek = $model->getWhere('user', $where)->getRow();

    // Jika ada hasil
    if ($cek) {
        session()->set('id_user', $cek->id_user); // Menggunakan id_user untuk session
        session()->set('username', $cek->username);
        session()->set('level', $cek->level);
        return redirect()->to('home/dashboard');
    } else {
        return redirect()->to('home/login')->with('error', 'Username atau password salah');
    }
}

        public function logout(){
            session()->destroy();
            return redirect()->to('home/login');
    }

public function aksi_esetting() {
    $model = new M_order();

    // Retrieve POST data
    $jwebsite = $this->request->getPost('judul_website');
    $id = $this->request->getPost('id');

    // Retrieve file uploads
    $t_icon = $this->request->getFile('t_icon');
    $m_icon = $this->request->getFile('m_icon');
    $l_icon = $this->request->getFile('l_icon');

    // Initialize the data array
    $data = array('judul_website' => $jwebsite);

    // Process tab_icon if provided
    if ($t_icon->isValid() && !$t_icon->hasMoved()) {
        $foto_t_icon = $t_icon->getRandomName(); // Generate a unique filename
        $t_icon->move(ROOTPATH . 'public/images', $foto_t_icon);
        $data['tab_icon'] = $foto_t_icon;
    }

    // Process menu_icon if provided
    if ($m_icon->isValid() && !$m_icon->hasMoved()) {
        $foto_m_icon = $m_icon->getRandomName(); // Generate a unique filename
        $m_icon->move(ROOTPATH . 'public/images', $foto_m_icon);
        $data['menu_icon'] = $foto_m_icon;
    }

    // Process login_icon if provided
    if ($l_icon->isValid() && !$l_icon->hasMoved()) {
        $foto_l_icon = $l_icon->getRandomName(); // Generate a unique filename
        $l_icon->move(ROOTPATH . 'public/images', $foto_l_icon);
        $data['login_icon'] = $foto_l_icon;
    }

    // Check if the ID is valid
    if (empty($id)) {
        return redirect()->to('home/setting')->with('error', 'ID is required.');
    }

    // Update the setting
    $where = array('id_setting' => $id);
    $result = $model->edit('setting', $data, $where);

    // Check if update was successful
    if ($result) {
        return redirect()->to('home/setting')->with('success', 'Settings updated successfully.');
    } else {
        return redirect()->to('home/setting')->with('error', 'Failed to update settings.');
    }
}

public function barang()
{
    $model = new M_order();
    
    // Mengambil data barang dari model
    $data['satu'] = $model->tampil('barang');
    
    // Menampilkan views
    echo view('header');
    echo view('barang', $data);
    echo view('footer');
}
public function user()
{
    $model = new M_order();
    
    // Mengambil data barang dari model
    $data['satu'] = $model->tampil('user');
    
    // Menampilkan views
    echo view('header');
    echo view('user', $data);
    echo view('footer');
}
  public function tambahbarang(){
        $model = new M_order();
        $data['satu'] = $model->tampil('barang');
        echo view('header');
        echo view('tambahbarang',$data);
        echo view('footer');
}
public function tambahuser(){
        $model = new M_order();
        $data['satu'] = $model->tampil('user');
        echo view('header');
        echo view('tambahuser',$data);
        echo view('footer');
}

public function aksi_t_barang()
{
    $model = new M_order();

        $uploadedFile = $this->request->getfile('foto');
    $nbarang = $this->request->getPost('nama_barang');
    $hbeli = $this->request->getPost('hbeli');
    $hjual = $this->request->getPost('hjual');
    $stok = $this->request->getPost('stok');
    $status = $this->request->getPost('status');

    if ($uploadedFile->getName()) {
            $foto = $uploadedFile->getName();
            $model->upload($uploadedFile);

    $data = array(
        'nama_barang' => $nbarang,
        'hbeli' => $hbeli,
        'hjual' => $hjual,
        'stok' => $stok,
        'status' => $status,
        'delete' => '0',
        'foto' => $foto,
        'create_at' => date('Y-m-d H:i:s'),
        'create_by' => session()->get('id'),
    );
    }else{
        $data = array(
         'nama_barang' => $nbarang,
        'hbeli' => $hbeli,
        'hjual' => $hjual,
        'stok' => $stok,
        'status' => $status,
        'delete' => '0',
        'create_at' => date('Y-m-d H:i:s'),
        'create_by' => session()->get('id'),
        );
    }
    $model->tambah('barang', $data);
        return redirect()->to('home/barang');
}
public function aksi_e_barang()
{
    $model = new M_order();

    // Ambil data dari form
    $id = $this->request->getPost('id');
    log_message('debug', 'ID: ' . $id); // Log ID

    $nbarang = $this->request->getPost('nama_barang');
    $hbeli = $this->request->getPost('hbeli');
    $hjual = $this->request->getPost('hjual');
    $stok = $this->request->getPost('stok');
    $status = $this->request->getPost('status');

    // Buat array data untuk update
    $data = array(
        'nama_barang' => $nbarang,
        'hbeli' => $hbeli,
        'hjual' => $hjual,
        'stok' => $stok,
        'status' => $status,
        'update_by' => session()->get('id'),
        'update_at' => date('Y-m-d H:i:s')
    );

    // Debug log data being updated
    log_message('debug', 'Data to update: ' . json_encode($data));

    // Update data barang berdasarkan ID
    if ($model->update($id, $data)) {
        return redirect()->to('home/barang')->with('success', 'Barang berhasil diperbarui');
    } else {
        return redirect()->back()->with('error', 'Gagal memperbarui barang');
    }
}
public function aksi_t_user()
{
    $model = new M_order();

        $uploadedFile = $this->request->getfile('foto');
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');
   
    if ($uploadedFile->getName()) {
            $foto = $uploadedFile->getName();
            $model->upload($uploadedFile);

    $data = array(
        'username' => $username,
        'password' => $password,
        'delete' => '0',
        'foto' => $foto,
    );
    }else{
        $data = array(
         'username' => $username,
        'password' => $password,
        'delete' => '0',
        'foto' => $foto,
        );
    }
    $model->tambah('user', $data);
        return redirect()->to('home/user');
}
public function aksi_e_user()
{
    $model = new M_order();

    // Ambil data dari form
    $id = $this->request->getPost('id');
    log_message('debug', 'ID: ' . $id); // Log ID

    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');
    // Buat array data untuk update
    $data = array(
        'username' => $username,
        'password' => $password,
        'delete' => '0',
        'update_by' => session()->get('id'),
        'update_at' => date('Y-m-d H:i:s')
    );

    // Debug log data being updated
    log_message('debug', 'Data to update: ' . json_encode($data));

    // Update data barang berdasarkan ID
    if ($model->update($id, $data)) {
        return redirect()->to('home/user')->with('success', 'User berhasil diperbarui');
    } else {
        return redirect()->back()->with('error', 'Gagal memperbarui User');
    }
}
  public function editbarang($id)
{
    $db = \Config\Database::connect();
    $builder = $db->table('barang');
    $builder->where('id_barang', $id);
    $query = $builder->get();
    $data['satu'] = $query->getFirstRow(); // Ambil baris pertama

    if (!$data['satu']) {
        log_message('error', 'Barang dengan ID ' . $id . ' tidak ditemukan.');
        return redirect()->back()->with('error', 'Data barang tidak ditemukan atau query gagal');
    }

    echo view('header');
    echo view('editbarang', $data);
    echo view('footer');

}
public function edituser($id)
{
    $db = \Config\Database::connect();
    $builder = $db->table('user');
    $builder->where('id_user', $id);
    $query = $builder->get();
    $data['satu'] = $query->getFirstRow(); // Ambil baris pertama

    if (!$data['satu']) {
        log_message('error', 'Barang dengan ID ' . $id . ' tidak ditemukan.');
        return redirect()->back()->with('error', 'Data barang tidak ditemukan atau query gagal');
    }

    echo view('header');
    echo view('edituser', $data);
    echo view('footer');

}

 public function hapus_barang($id)
{
      $model = new M_order();

             
            $where=array('id_barang'=>$id);
            $model->hapus('barang',$where);
        return redirect()->to('home/barang');
}

 public function hapus_user($id)
{
    $model = new M_order();
     $where=array('id_user'=>$id);
            $model->hapus('user',$where);

    return redirect()->to('home/user');
}

public function hapus_permanen($id_barang)
    {
        $model = new M_order();
        if ($model->delete($id_barang, true)) { // Menghapus data permanen
            return redirect()->to('home/rbarang');
        } else {
            return redirect()->back()->with('error', 'Gagal menghapus data.');
        }
    }
 public function restore($id_barang)
{
    $model = new M_order();
    try {
        if ($model->restore($id_barang)) {
            return redirect()->to('home/rbarang');
        } else {
            return redirect()->back()->with('error', 'Gagal memulihkan data.');
        }
    } catch (\Exception $e) {
        return redirect()->back()->with('error', $e->getMessage());
    }
}

public function rbarang()
{
    $model = new M_order();
    $data['satu'] = $model->getDeletedItems(); 

    echo view('header');
    echo view('rbarang', $data); 
    echo view('footer');
}
public function ruser()
{
    $model = new M_order();
    $data['satu'] = $model->getDeletedItems(); 

    echo view('header');
    echo view('ruser', $data); 
    echo view('footer');
}
    public function profil(){
    
        $model = new M_order();
       
        $where = ['id_setting' => 1];
        $data['setting'] = $model->getWhere('setting', $where); 
        $where1 = array('level' =>session()->get('level'));
        $data['menu'] = $model->getwhere('menu', $where1);
        echo view('header', $data);
        echo view('profil', $data);
        echo view('footer');
}

}
