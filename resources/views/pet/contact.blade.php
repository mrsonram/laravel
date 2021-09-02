<!-- Contact Modal-->
<div class="portfolio-modal modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModal" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>

            <form action="{{ action('ContactController@store') }}" method="POST" data-sb-form-api-token="API_TOKEN">
                {{ csrf_field() }}
            <div class="modal-body text-center pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="contact-title">ส่งข้อความถึงเรา</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-paw"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>

                                <!-- Name input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                    <label for="name" style="font-size: 30px">ชื่อ</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required" style="font-size: 26px">กรุณาใส่ชื่อด้วย</div>
                                </div>
                                <!-- Email address input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                    <label for="email" style="font-size: 30px">Email address</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required" style="font-size: 26px">กรุณาใส่อีเมล์ด้วย</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email" style="font-size: 26px">อีเมล์ไม่ถูกต้อง</div>
                                </div>
                                <!-- Title input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="title" name="title" type="text" placeholder="เรื่องที่ต้องการติดต่อเรา" data-sb-validations="required" />
                                    <label for="title" style="font-size: 30px">เรื่อง</label>
                                    <div class="invalid-feedback" data-sb-feedback="title:required" style="font-size: 26px">กรุณาใส่ชื่อเรื่องด้วย</div>
                                </div>
                                <!-- Message input-->
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="message" name="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                    <label for="message" style="font-size: 30px">รายละเอียด</label>
                                    <div class="invalid-feedback" data-sb-feedback="message:required" style="font-size: 26px">ไม่สามารถเว้นว่างได้</div>
                                </div>
                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                                <!--<div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">ส่งข้อมูลแล้ว</div>
                                    </div>
                                </div>-->
                                <!-- Submit error message-->
                                <!---->
                                <!-- This is what your users will see when there is-->
                                <!-- an error submitting the form-->
                                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3" style="font-size: 26px">ส่งข้อมูลไม่สำเร็จ</div></div>
                                <!-- Submit Button-->
                                <!--<button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit" style="font-size: 28px">ส่งข้อมูล</button>-->
                                <button type="submit" class="btn btn-primary btn-xl" style="font-size: 28px">ส่งข้อมูล</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
