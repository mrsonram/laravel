<!-- Contact Modal-->
<div class="portfolio-modal modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModal" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
            <div class="modal-body text-center pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" span style="font-family: FontNongnam">ส่งข้อความถึงเรา</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-paw"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                                <!-- Name input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                    <label for="name" span style="font-family: FontNongnam; font-size: 30px">ชื่อ</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required" span style="font-family: FontNongnam; font-size: 26px">กรุณาใส่ชื่อด้วย</div>
                                </div>
                                <!-- Email address input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                    <label for="email" span style="font-family: FontNongnam; font-size: 30px">Email address</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required" span style="font-family: FontNongnam; font-size: 26px">กรุณาใส่อีเมล์ด้วย</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email" span style="font-family: FontNongnam; font-size: 26px">อีเมล์ไม่ถูกต้อง</div>
                                </div>
                                <!-- Phone number input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="phone" type="tel" placeholder="เรื่องที่ต้องการติดต่อเรา" data-sb-validations="required" />
                                    <label for="phone" span style="font-family: FontNongnam; font-size: 30px">เรื่อง</label>
                                    <div class="invalid-feedback" data-sb-feedback="phone:required" span style="font-family: FontNongnam; font-size: 26px">กรุณาใส่ชื่อเรื่องด้วย</div>
                                </div>
                                <!-- Message input-->
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                    <label for="message" span style="font-family: FontNongnam; font-size: 30px">รายละเอียด</label>
                                    <div class="invalid-feedback" data-sb-feedback="message:required" span style="font-family: FontNongnam; font-size: 26px">ไม่สามารถเว้นว่างได้</div>
                                </div>
                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Form submission successful!</div>
                                        To activate this form, sign up at
                                        <br />
                                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div>
                                <!-- Submit error message-->
                                <!---->
                                <!-- This is what your users will see when there is-->
                                <!-- an error submitting the form-->
                                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3" span style="font-family: FontNongnam; font-size: 26px">ส่งข้อมูลไม่สำเร็จ</div></div>
                                <!-- Submit Button-->
                                <button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit" span style="font-family: FontNongnam; font-size: 28px">ส่งข้อมูล</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
