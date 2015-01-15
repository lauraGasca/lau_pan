@section('contenido')
    <!-- SUB BANNER -->
    <section class="sub-banner text-center section">
        <div class="awe-parallax bg-4"></div>
        <div class="awe-title awe-title-3">
            <h3 class="lg text-uppercase">Reservation</h3>
        </div>
    </section>
    <!-- END / SUB BANNER -->

    <!-- RESERVATION -->
    <section class="reservation section pd">
        <div class="divider divider-2"></div>
        <div class="reservation-content">
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <table class="form-table table-first">
                            <tbody>
                            <tr class="t-date">
                                <td colspan="2">
                                    <label for="date">Date</label>
                                    <div class="form-item">
                                        <input type="text" id="date" placeholder="dd/mm/yyyy">
                                        <i class="icon awe_calendar"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr class="t-time-pers">
                                <td class="t-time">
                                    <label for="time">Time</label>
                                    <div class="form-item">
                                        <input type="text" id="time" placeholder="-- : --">
                                        <i class="icon awe_clock_2"></i>
                                    </div>
                                </td>
                                <td class="t-pers">
                                    <label for="pers">Pers</label>
                                    <div class="form-item">
                                        <input type="text" id="pers">
                                    </div>
                                </td>
                            </tr>
                            <tr class="t-note">
                                <td colspan="2">
                                    <label for="note">Note</label>
                                    <div class="form-item">
                                        <input type="text" id="note">
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-6">
                        <table class="form-table">
                            <tbody>
                            <tr class="t-name">
                                <td>
                                    <label for="name">Guest Name</label>
                                    <div class="form-item">
                                        <input type="text" id="name">
                                    </div>
                                </td>
                            </tr>
                            <tr class="t-telephone">
                                <td>
                                    <label for="telephone">Telephone</label>
                                    <div class="form-item">
                                        <input type="text" id="telephone">
                                    </div>
                                </td>
                            </tr>
                            <tr class="t-email">
                                <td>
                                    <label for="email">Email</label>
                                    <div class="form-item">
                                        <input type="text" id="email">
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="form-footer text-center">
                    <div class="form-item">
                        <input type="submit" value="CHECK AVAILABILITY" class="awe-btn awe-btn-3 awe-btn-default text-uppercase">
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- END / RESERVATION -->

    <!-- TESTIMONIAL -->
    <section id="testimonial" class="testimonial testimonial-1 section">
        <!-- BACKGROUND -->
        <div class="awe-parallax bg-6"></div>
        <!-- END / BACKGROUND -->

        <!-- OVERLAY -->
        <div class="awe-overlay"></div>
        <!-- END / OVERLAY -->

        <div class="container">
            <div class="testimonial-content">
                <div class="icon-head">
                    <i class="icon awe_quote_left"></i>
                </div>

                <blockquote>
                    <p>It’s not about nutrients and calories.</p>
                    <span>It’s about sharing. It’s about honesty.</span>
                    <div class="test-footer text-right">
                        <span class="sm">Robert Smith</span>
                    </div>
                </blockquote>
            </div>
        </div>
    </section>
    <!-- END / TESTIMONIAL -->
@stop