<?php
    // src/Entity/UserProfile.php
    namespace App\Entity;
    use Doctrine\ORM\Mapping as ORM;
    use Symfony\Component\Validator\Constraints as Assert;

    // /**
    // * @ORM\Entity(repositoryClass="App\Repository\UserProfileRepository")
    // */

class Avatar
{
    /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="Please, upload the Avatar as a jpg file.")
     * @Assert\File(mimeTypes={ "application/jpeg" })
     */
    private $avatar;

    public function getAvatar()
    {
        return $this->avatar;
    }

    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;

    } 
} 
?>