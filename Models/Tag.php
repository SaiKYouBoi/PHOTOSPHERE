class Tag {
    private ?int $id;
    private string $name;
    private string $slug;
    private int $usageCount;

    public function __construct(
        ?int $id,
        string $name,
        string $slug,
        int $usageCount
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->slug = $slug;
        $this->usageCount = $usageCount;
    }
}