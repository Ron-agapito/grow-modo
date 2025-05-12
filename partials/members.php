<div class="block block-members">
    <div class="container">
        <?php 
        $title = get_sub_field('title');
        if ($title): ?>
            <h2 class="block-title"><?php echo esc_html($title); ?></h2>
        <?php endif; ?>

        <?php 
        $text = get_sub_field('text');
        if ($text): ?>
            <div class="text">
                <p><?php echo esc_html($text); ?></p>
            </div>
        <?php endif; ?>

        <div class="members">
            <?php 
            $members = get_sub_field('members');
            if ($members): 
                foreach ($members as $member): 
                    $image_id = get_field('image', $member);
                    $name = get_field('name', $member);
                    $role = get_field('role', $member);
            ?>
                <div class="member">
                    <div class="image">
                        <?php if ($image_id): ?>
                            <?php echo wp_get_attachment_image($image_id, 'medium'); ?>
                        <?php endif; ?>
                    </div>
                    <div class="text">
                        <?php if ($name): ?>
                            <h3><?php echo esc_html($name); ?></h3>
                        <?php endif; ?>
                    </div>
                    <div class="role">
                        <?php if ($role): ?>
                            <h4><?php echo esc_html($role); ?></h4>
                        <?php endif; ?>
                    </div>
                </div>
            <?php 
                endforeach; 
            endif; 
            ?>
        </div>
    </div>
</div>