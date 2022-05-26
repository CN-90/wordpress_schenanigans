<?php /* Template Name: Team */ ?>
<?php get_header(); ?>


<main>
    <div id="bio_modal">
        <div class="modal_close">
            X
        </div>
        <div>
            <img src="" alt="" id="modal_image">

        </div>
        <div>
            <h1 id="modal_name"></h1>
            <p id="modal_position"></p>
            <div id="modal_summary"></div>
        </div>
    </div>
    <?php the_content(); ?>
    <section class="col-1200">
        <h1>Sonora Investment Management Team</h1>
        <h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus, cupiditate.</h1>

        <?php
        $args = array(
            'post_type' => 'team',
        );
        $query = new WP_Query($args); ?>

        <div class="team_container">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <?php
                // get team members info and and create an associate array which will be passed to the togglemodal function as json.
                $image_url = get_the_post_thumbnail_url( $post -> ID );
                $name = get_the_title();
                $position = get_field('position');
                $summary = get_the_content();
                $team_member = ['name' => $name, 'position' => $position, "summary" => $summary, 'image_url' => $image_url];

                ?>
                <div class="team_member">
                    <div class="team_member-img" onclick="toggleModal(<?php echo htmlentities(json_encode($team_member)) ?>)"><? echo get_the_post_thumbnail(); ?></div>
                    <h2 class="team_member-name"><?php echo $name; ?></h2>
                    <p class="team_member-position"><?php echo $position; ?></p>
                </div>
            <?php endwhile; ?>
        </div>
    </section>

</main>

<?php get_footer() ?>