<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    /**
     * @Route("/save/{id_session}")
     * @Method("POST")
     *
     * @param string $id_session
     *
     * @return JsonResponse
     */
    public function saveAction($id_session)
    {
        $php_session = $this->get('session')->getId();
        $FARUpload = $this->get('far_symfony2_upload_bundle.far_symfony2_upload_lib.service');

        $files = $FARUpload->getListFilesLocal($php_session, $id_session);
        $files = $FARUpload->setListFilesPathRemote($files, $id_session);

        $files = $FARUpload->syncFilesLocalRemote($files, false);
        $files = $FARUpload->deleteFilesLocal($files);

        return new JsonResponse(array('files' => $files));
    }
}
