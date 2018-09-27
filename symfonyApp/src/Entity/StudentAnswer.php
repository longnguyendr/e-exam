<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StudentAnswerRepository")
 */
class StudentAnswer
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\QuestionInExam", inversedBy="studentAnswers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $questionInExam;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Assessment", inversedBy="studentAnswer", cascade={"persist", "remove"})
     */
    private $assessment;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\User", inversedBy="studentAnswer", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestionInExam(): ?QuestionInExam
    {
        return $this->questionInExam;
    }

    public function setQuestionInExam(?QuestionInExam $questionInExam): self
    {
        $this->questionInExam = $questionInExam;

        return $this;
    }

    public function getAssessment(): ?Assessment
    {
        return $this->assessment;
    }

    public function setAssessment(?Assessment $assessment): self
    {
        $this->assessment = $assessment;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
