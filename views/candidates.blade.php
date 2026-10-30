<?php
    $sectionData = [
        'nice-select' => 'no',
        'section-hero-wrap' => 'yes',
        'open-positions' => 'no',
        'subscribe-section' => 'yes',
    ]
?>

@extends('layouts.master')

@section('title', 'Candidates')

@section('content')
    <section class="ftco-section ftco-candidates ftco-candidates-2 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pr-lg-4">
                    <div class="row">
                        
                        <?php
                        
                        foreach ($allCandidateList as $row) {
                            # code...
                        
                        ?>
                        <div class="col-md-6">
                            <div class="team d-md-flex p-4 bg-white">
                            <div class="img" style="background-image: url(/assets/images/candidates/<?=$row['img']?>);"></div>
                            <div class="text pl-md-4">
                                <span class="location mb-0"><?=$row['country']?></span>
                                <h2><?=$row['first_name']?> <?=$row['last_name']?></h2>
                                
                                <span class="position"><?=$row['experience']?></span>
                                <p class="mb-2"><?=$row['about']?></p>
                                <p class="text-primary"><?=$row['name']?></p>
                            </div>
                        </div>
                        </div>
            <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection