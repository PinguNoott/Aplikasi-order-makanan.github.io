<?php 
namespace App\Models;

use CodeIgniter\Model;

class M_order extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'id_barang';

    protected $allowedFields = ['username', 'password', 'nama_barang', 'hbeli', 'hjual', 'stok', 'status', 'foto', 'delete'];
     protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

public function getDeletedItems()
    {
         return $this->withDeleted()->where($this->deletedField . ' IS NOT NULL')->findAll();
    }
public function tampil($table)
{
    $query = $this->db->table($table)->get();
    if (!$query) {
        // Tangkap kesalahan dan cetak query terakhir untuk debugging
        echo $this->db->getLastQuery();
        return false; // Atau Anda bisa melemparkan pengecualian (throw new \Exception('Error'));
    }
    return $query->getResult(); // Pastikan query valid sebelum memanggil getResult
}
 public function tampilWhere2($tabel, $where, $where1) {
        return $this->db->table($tabel)
                        ->where($where)
                        ->where($where1)
                        ->get();
                        
    }
public function buildMenuTree($parentId = 0)
{
    $builder = $this->db->table('menu');
    $builder->where('parent_id', $parentId);
    $query = $builder->get();

    if (!$query) {
        log_message('error', $this->db->getLastQuery()); // Simpan query terakhir dalam log
        return [];
    }

    $menus = $query->getResult();

    foreach ($menus as $menu) {
        $menu->children = $this->buildMenuTree($menu->id);
    }

    return $menus;
}

public function update($id = null, $data = null): bool
{
    if ($id === null || $data === null) {
        return false; // Ensure both id and data are provided
    }

    return $this->db->table('barang')->where('id_barang', $id)->update($data);
}


	
   public function getwhere($tabel, $where){
    return $this->db->table($tabel)
                    ->getWhere($where);
}

	public function tambah($tabel,$data){
		return $this->db->table($tabel)
		                ->insert($data);
	}
	
	public function edit($table, $data, $where)
{
    return $this->db->table($table)->update($data, $where);
}

public function hapus($tabel, $where)
{
    return $this->db->table($tabel)
                    ->delete($where);
}

  public function restore($id)
{
    $record = $this->find($id); // Check if record exists
    if ($record) {
        return $this->update($id, ['deleted_at' => null]);
    } else {
        throw new \Exception('Record not found.');
    }
}

    public function upload($file)
    {
            $imageName = $file->getName();
            $file->move(ROOTPATH . 'public/photo barang', $imageName);
    }

    public function upload1($file)
    {
            $imageName = $file->getName();
            $file->move(ROOTPATH . 'public/images', $imageName);
    }
    public function getFilteredMenu()
    {
        // Fetch all menu items
        $menus = $this->tampil('menus');
        
        $userLevel = session()->get('level');
        
        if ($userLevel == 3) {
            // Filter only menus that should be shown for level 3
            $menus = array_filter($menus, function($menu) {
                return $menu->show_for_level_3 == 1;
            });
        }
    
        // Build the menu tree from filtered menus
        return $this->buildMenuTree($menus);
    }
    }
