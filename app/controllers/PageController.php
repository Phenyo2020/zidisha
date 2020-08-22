<?php

class PageController extends BaseController {

	public function getOurStory() {
        return View::make('pages.our-story');
    }

    public function getHowItWorks() {
        return View::make('pages.how-it-works');
    }

    public function getWhyZidisha() {
        return View::make('pages.why-zidisha');
    }

    public function getTrustAndSecurity() {
        return View::make('pages.trust-and-security');
    }

    public function getPress() {
        return View::make('pages.press');
    }

    public function getTermsOfUse(){
        return View::make('pages.terms-and-conditions');
    }

    public function getVolunteerMentorGuidelines(){
        return View::make('borrower.volunteerMentor.guidelines');
    }

    public function getVolunteerMentorCodeOfEthics(){
        return View::make('borrower.volunteerMentor.code-of-ethics');
    }

    public function getVolunteerMentorFaq(){
        return View::make('borrower.volunteerMentor.frequently-asked-questions');
    }

    public function getFeatureCriteria()
    {
        //TODO change links on this page
        return View::make('borrower.feature-criteria');
    }
}
