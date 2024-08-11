<?php echo '<?php' ?>

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EntrustSetupTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create table for storing roles
        Schema::create('<?php echo e($rolesTable); ?>', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->string('allowed_route')->nullable();
            $table->timestamps();
        });

        // Create table for associating roles to users (Many-to-Many)
        Schema::create('<?php echo e($roleUserTable); ?>', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('role_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->primary(['user_id', 'role_id']);
        });

        // Create table for storing permissions
        Schema::create('<?php echo e($permissionsTable); ?>', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->string('route')->nullable();
            $table->string('module')->nullable();
            $table->string('as')->nullable();
            $table->string('icon')->nullable();
            $table->unsignedTinyInteger('parent')->default(0);
            $table->unsignedTinyInteger('parent_show')->default(0);
            $table->unsignedTinyInteger('parent_original')->default(0);
            $table->unsignedTinyInteger('sidebar_link')->default(1);
            $table->unsignedTinyInteger('appear')->default(0);
            $table->unsignedBigInteger('ordering')->default(0);
            $table->timestamps();
        });

        // Create table for associating permissions to roles (Many-to-Many)
        Schema::create('<?php echo e($permissionRoleTable); ?>', function (Blueprint $table) {
            $table->foreignId('permission_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('role_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->primary(['permission_id', 'role_id']);
        });

        Schema::create('<?php echo e($userPermissionTable); ?>', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('permission_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->primary(['user_id', 'permission_id']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('<?php echo e($userPermissionTable); ?>');
        Schema::drop('<?php echo e($permissionRoleTable); ?>');
        Schema::drop('<?php echo e($permissionsTable); ?>');
        Schema::drop('<?php echo e($roleUserTable); ?>');
        Schema::drop('<?php echo e($rolesTable); ?>');
    }
}
<?php /**PATH C:\xampp\htdocs\bloge_laravel\vendor\mindscms\entrust\src\views/generators/migration.blade.php ENDPATH**/ ?>